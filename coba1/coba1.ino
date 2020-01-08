#include <Ethernet.h>

#define echoPin 12
#define trigPin 11
//#define LEDPin 13


int maximumRange = 50;
int minimumRange =00;
long duration, distance;

void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);
  pinMode(trigPin, OUTPUT);
  pinMode(echoPin, INPUT);
}

void loop() {
  // put your main code here, to run repeatedly:
  digitalWrite(trigPin, LOW);delayMicroseconds(2);
  digitalWrite(trigPin, HIGH);delayMicroseconds(10);
  digitalWrite(trigPin, LOW);
  duration = pulseIn(echoPin, HIGH);

  distance = duration/58.2;

  if(distance >= maximumRange || distance <= minimumRange){
    Serial.println("-1");

  }else{
    Serial.println(distance);

    delay(100);
  }
}
