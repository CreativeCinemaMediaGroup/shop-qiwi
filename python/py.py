import requests
import json

api_access_token = '' # токен можно получить здесь https://qiwi.com/api

s = requests.Session()
#s.headers['Accept']= 'application/json'
s.headers['authorization'] = 'Bearer ' + api_access_token
b = s.get('https://edge.qiwi.com/funding-sources/v1/accounts/current')
print(json.loads(b.text))
