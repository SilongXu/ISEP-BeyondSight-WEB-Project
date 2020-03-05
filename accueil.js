const countUp = new CountUp(70, 5234);

if (!countUp.error) {
  countUp.start();
} else {
  console.error(countUp.error);
}