
# Authentication service

Test of an Authentication service API with JWT

 
## Authors

- [@florent Ascensio](https://www.github.com/Flo654)


## Demo

https://authentication-service-api.herokuapp.com/api


## Documentation

[Documentation](https://authentication-service-api.herokuapp.com/api/docs?ui=re_doc)


## API Reference

#### Get all users

```http
  GET /api/users
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `page` | `integer` | **optionnal**. |

#### Get user

```http
  GET /api/items/{id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id`      | `string` | **Required**. Id of user to fetch|


#### Create an user

```http
  POST /api/users
```

**Required**. body

```javascript
{
  "email": "user1@example.com",
  "roles": [
    "ROLE_ADMIN"
  ],
  "password": "1234",
  "username": "user1"
}
```

#### Get user

```http
  GET /api/items/{id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id`      | `string` | **Required**. Id of user to fetch|

## 🚀 About Me
I'm a full stack developer...

