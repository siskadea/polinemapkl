#include <Ethernet.h>

byte mac[] = { 0x28, 0xAA, 0xBB, 0xCC, 0xDE, 0x02 };

#define echoPin 4
#define trigPin 2

int maximumRange = 50;
int minimumRange = 00;
int count, duration, distance;

void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);
  pinMode(trigPin, OUTPUT);
  pinMode(echoPin, INPUT);

}


void loop() {
  // put your main code here, to run repeatedly:
  digitalWrite(trigPin, LOW); delayMicroseconds(2);
  digitalWrite(trigPin, HIGH); delayMicroseconds(10);
  digitalWrite(trigPin, LOW);
  duration = pulseIn(echoPin, HIGH);

  distance = (duration / 2) / 29.1;

  if (distance > minimumRange && distance < maximumRange) {
    count++;
    Serial.print("Count: ");
    Serial.println(count);
  delay (100);

}
}
