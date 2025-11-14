a = 2
b = 3

if a < b:
    a = a + b
else:
    b = b + a

for i in range(2):
    if a % 2 == 0:
        a = a // 2 + i
    else:
        a = a * 2 - i

if b > a:
    a = a + b
else:
    a = a - b

print(a)