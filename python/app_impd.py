import mysql.connector
import time
import random, os
from sklearn.externals import joblib
import TiModels
from utilities import texts2english, get_word_list

random.seed()

config = {
    'user': 'root',
    'password': 'root',
    'host': '192.168.1.103',
    'database': 'app_imp',
    'raise_on_warnings': True,
}
config = {
    'user': 'root',
    'password': '',
    'host': 'localhost',
    'database': 'app_imp',
    'raise_on_warnings': True,
}
# 连接数据库
cnx = mysql.connector.connect(**config)
cursor = cnx.cursor(buffered=True)
cursor_w = cnx.cursor(buffered=True)
# 定时咨询
query_cnt = 0

# load model
stwDir = 'dic/hit_stop_words_noCN'
stw = open(stwDir, 'r', encoding='utf-8').read().split('\n')
label_prefix_dir = 'save/Linear-SVM_label'
senti_prefix_dir = 'save/Linear-SVM_senti'
# load label model
prefix_dir = label_prefix_dir
# load FE and label dictionary
myFE = joblib.load(os.path.join(prefix_dir, "FeatureExtraction.pkl"))
# load label Model
c_model = TiModels.TiSVM()
c_model.load(prefix_dir)
# sentiment model
prefix_dir = senti_prefix_dir
s_model = TiModels.TiSVM()
s_model.load(prefix_dir)


def get_label(content):
    # input list
    # output list
    content = [content]
    # transform texts into English sentence style
    texts_test = texts2english(content, stwDir=stw)
    x_test = myFE.transform(texts_test)
    # predict
    prediction = c_model.predict_class(x_test)
    return int(prediction[0])
    # return random.randint(0, 3)


def get_sentiment(content):
    # input list
    # output list
    content = [content]
    # transform texts into English sentence style
    texts_test = texts2english(content, stwDir=stw)
    x_test = myFE.transform(texts_test)
    # predict
    prediction = s_model.predict_class(x_test)
    return int(prediction[0])
    # return random.randint(0, 3)


while True:
    sql = "SELECT review_id, content FROM review WHERE label_id = -1 OR sentiment_id = -1"
    cursor.execute(sql)
    # 对每一句未分析的贴上标签并分词
    query_cnt += 1
    print("query %d, %d reviews fetched." % (query_cnt, cursor.rowcount))
    success_cnt = 0;
    for review_id, content in cursor:
        # 防止空内容
        if content is None:
            continue
        # 获取标签并写入
        label_id = get_label(content)
        sentiment_id = get_sentiment(content)
        sql = "UPDATE review SET label_id=%s, sentiment_id=%s WHERE review_id=%s"
        cursor_w.execute(sql, (label_id, sentiment_id, review_id))
        # 分词并写入
        word_list = get_word_list(content, stw_list=stw)
        # 清除原有分词
        sql = "DELETE FROM cut_word WHERE review_id = %s"
        cursor_w.execute(sql, (review_id,))
        sql = "INSERT INTO cut_word(word, review_id) VALUES"
        first = True
        data_list = []
        for word in word_list:
            if first:
                first = False
            else:
                sql += ","
            sql += "(%s, %s)"
            data_list.append(word)
            data_list.append(review_id)
        if data_list.__len__():
            cursor_w.execute(sql, tuple(data_list))
        cnx.commit()
        success_cnt += 1
        print("review %d done, label_id = %d, sentiment_id = %d, %d words cut. %d/%d"
              % (review_id, label_id, sentiment_id, word_list.__len__(), success_cnt, cursor.rowcount))
    cnx.commit()
    time.sleep(1)

# 关闭连接
cursor.close()
cnx.close()
