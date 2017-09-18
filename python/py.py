import requests
import json

api_access_token = 'ec59caf9f2e8e6e4ec2eea644b897873'

s = requests.Session()
s.headers['Accept']= 'application/json'
s.headers['Content-type']= 'application/json'
s.headers['Authorization'] = 'Bearer ' + api_access_token
b = s.get('https://edge.qiwi.com/payment-history/v1/persons/79283224437/payments?rows=10')
print(json.loads(b.text))
