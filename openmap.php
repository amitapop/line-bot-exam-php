<?php
const functions = require('firebase-functions');
const request = require('request-promise');

const LINE_MESSAGING_API = 'https://api.line.me/v2/bot/message';
const LINE_HEADER = {
  'Content-Type': 'application/json',
  'Authorization': `Bearer g6qoh2t2ES0MM70583gvymhEkcqIFRGdMJpOBIh/AVotPOY/Kws6oybku7Gz/dVJJu+E5TZqSoJpGrxZKp8tDHPjORxWr2AhMQBBJ0+ViFUMNpt/m+9J9KriCvmBAluonk6DeHv0QOcU+VI6qBBeDAdB04t89/1O/w1cDnyilFU=`
};

exports.LineBotPush = functions.https.onRequest((req, res) => {
  return request({
    method: `GET`,
    uri: `https://api.openweathermap.org/data/2.5/weather?units=metric&type=accurate&zip=10330,th&appid=9d97cd72cb0570c34bf5934830c1a2b5`,
    json: true
  }).then((response) => {
    const message = `City: ${response.name}\nWeather: ${response.weather[0].description}\nTemperature: ${response.main.temp}`;
    return push(res, message);
  }).catch((error) => {
    return res.status(500).send(error);
  });
});

const push = (res, msg) => {
  return request({
    method: `POST`,
    uri: `${LINE_MESSAGING_API}/push`,
    headers: LINE_HEADER,
    body: JSON.stringify({
      to: `U10a83fb5dd64f26583bf747b7cfa8c4f`,
      messages: [
        {
          type: `text`,
          text: msg
        }
      ]
    })
  }).then(() => {
    return res.status(200).send(`Done`);
  }).catch((error) => {
    return Promise.reject(error);
  });
}
?>
