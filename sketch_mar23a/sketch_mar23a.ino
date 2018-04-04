#include<SoftwareSerial.h>
SoftwareSerial BT(10,11);
String readData;
void setup()
{
  BT.begin(9600);
  Serial.begin(9600);
}
void loop()
{
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

