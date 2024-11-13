echo "Fibonacci series"

a=0
b=1

echo $a
echo $b

for((i=2; i<=20; i++))
do
c=$((a+b))
echo $c
a=$b
b=$c
done

