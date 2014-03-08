var request = require("request");

request({
  uri: "http://localhost/test.php",
  method: "POST",
  //method: "GET",
  timeout: 10000,
  followRedirect: true,
  maxRedirects: 10,
  form: {"name": "Sergey"}
}, function(error, response, body) {
  console.log(body);
});
