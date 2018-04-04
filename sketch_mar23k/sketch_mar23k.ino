int waterPump=13;
int sen=A1;
void setup() {
  Serial.begin(9600);
pinMode(waterPump,OUTPUT);
pinMode(sen,INPUT);
}
void loop() {
  int sensor=analogRead(sen);
  //int sensor=digitalRead(sen);
  Serial.println(sensor);
  if(sensor>=1010)
  digitalWrite(waterPump,LOW);
  else
  digitalWrite(waterPump,HIGH);

}
