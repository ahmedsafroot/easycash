# Providers
create api to read data from json files and make filters on it

## Requirements
 - PHP >= 7.3
 - OpenSSL PHP Extension
 - PDO PHP Extension
 - Mbstring PHP Extension

## Installing
- clone project from [repository ](https://github.com/ahmedsafroot/easycash.git)
- create virtual host or use default server with folder/public as basic url
- run composer install
- create folder called providers inside storage/app
- put inside them any your provider json you need (find attached example in the project)
- if you need new extra json file you will need follow structre in example given
   - {
     "columns": {
     "amountColumn":"",
     "currencyColumn":"",
     "phoneColumn": "",
     "statusColumn": "",
     "createdAtColumn": "",
     "idColumn": ""
     },
     "StautsCode": {
     "paid":    "",
     "pending": "",
     "reject":  ""
     },
     "transactaions":[
                  {
                  },
                  {
                  }
          ]
      }
   
- this structure make us no need any change in code

