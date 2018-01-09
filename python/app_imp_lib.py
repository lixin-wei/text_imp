import random, os
from sklearn.externals import joblib
import TiModels
from utilities import texts2english, get_word_list

random.seed()

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
    return prediction[0]


def get_sentiment(content):
    # input list
    # output list
    content = [content]
    # transform texts into English sentence style
    texts_test = texts2english(content, stwDir=stw)
    x_test = myFE.transform(texts_test)
    # predict
    prediction = s_model.predict_class(x_test)
    return prediction[0]
    # return random.randint(0, 3)

