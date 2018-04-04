

//Libraries
#include <DHT.h>
#include<SoftwareSerial.h>
SoftwareSerial BT(10,11);
//String readData;

//Constants
#define DHTPIN 3     // what pin we're connected to
#define DHTTYPE DHT11   // DHT 11  (AM2302)
// Initialize DHT sensor for normal 16mhz Arduino
DHT dht(DHTPIN, DHTTYPE);
//SoftwareSerial BT(10,11);
String readData;

//Variables
int chk;
float hum;  //Stores humidity value
float temp; //Stores temperature value
int waterPump=13;
int sen=A1;
void setup()
{
    Serial.begin(9600);
  dht.begin();
     BT.begin(9600);
  Serial.begin(9600);
  Serial.begin(9600);
pinMode(waterPump,OUTPUT);
pinMode(sen,INPUT);
}

void loop()
{
   int sensor=analogRead(sen);
  //int sensor=digitalRead(sen);
  Serial.println(sensor);
  if(sensor>=10)
  digitalWrite(waterPump,LOW);
  else
  digitalWrite(waterPump,HIGH);
    //Read data and store it to variables hum and temp
    hum = dht.readHumidity();
    temp= dht.readTemperature();
    //Print temp and humidity values to serial monitor
    Serial.print("Humidity: ");
    Serial.print(hum);
    Serial.print(" %, Temp: ");
    Serial.print(temp);
    Serial.println(" Celsius");
    delay(1500); //Delay 2 sec.
    while (BT.available())
{
  delay(10);
  char c=BT.read();
  readData +=c;
}
if(readData.length()>0)
{
  Serial.println(readData);
  readData="";
}
}

   
