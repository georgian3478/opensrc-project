#include <DHT.h>
#include <DHT_U.h>
#define DHTPIN 2
#define DHTTYPE DHT11
DHT dht(DHTPIN, DHTTYPE);
int humidity;
int temp;
char data =0;
int waterPump=13;
int sen=A1;
void setup(){   
  Serial.begin(9600); 
  dht.begin();
  pinMode(waterPump,OUTPUT);
  pinMode(sen,INPUT);
  
  } 
  void loop() 
  {
     if(Serial.available()>0)
     {
     data=Serial.read();
     Serial.println(data);
     }
     
     int sensor=analogRead(sen);
     Serial.println(sensor);
     if(sensor>=1010)
     digitalWrite(waterPump,LOW);
     else
     digitalWrite(waterPump,HIGH);
    
    temp= dht.readTemperature();
    humidity=dht.readHumidity();
    Serial.println("Temperature = ");   
    Serial.println(temp); 
    Serial.println("Humidity= ");   
    Serial.println(humidity);   
    delay(500);
   }
    
