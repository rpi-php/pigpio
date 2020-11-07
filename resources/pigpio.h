typedef unsigned;
int gpioInitialise(void);
int gpioGetMode(unsigned int gpio);
int gpioSetMode(unsigned gpio, unsigned mode);
void gpioTerminate(void);
int gpioWrite(unsigned gpio, unsigned level);
int gpioServo(unsigned user_gpio, unsigned pulsewidth);
int gpioPWM(unsigned user_gpio, unsigned dutycycle);
int gpioRead (unsigned gpio);