# This is a sample Python script.

# Press Shift+F10 to execute it or replace it with your code.
# Press Double Shift to search everywhere for classes, files, tool windows, actions, and settings.


# See PyCharm help at https://www.jetbrains.com/help/pycharm/

# for i in range(11):
#     if i%2 != 0:
#         continue
#     else:
#         print(i)


# def hello_world(name,age):#объявление функции
#     # print('privet' + name + str(age))
#     print(name * age)
# ruslan = "ruslan "
# name1 = 5
# hello_world(ruslan,name1) #вызов функции
# hello_world("andrey ",3)
#
# def number(answer_number):
#     return 100 - answer_number
# print(number(5))

# import random
# def getanswer(number):
#     if number == 1:
#         return "рандомное число 1"
#     elif number == 2:
#         return "рандомное число 2"
#     elif number == 3:
#         return "рандомное число 3"
#     elif number == 4:
#         return "esf"
# random_number = random.randint(1, 4)
# fortuna = getanswer(random_number)
# print("fdsf",end="")
# print("aaaaaaa",'gfhfg',end="")
#
# def a():
#     print("a() start")
#     b()
#
# def b():
#     print("b() start")
#     c()
# def c():
#     print("привет мир")

# local_value = 2
# def local_value():
#     local_value = 1
#     print(local_value)
# local_value()
# print(local_value)
# def becon():
#     eggs = 5
#     chezze()
#     print(eggs)
# def chezze():
#     banana = 5
#     eggs = 0
# becon()

# def spam():
#     eggs = "spamlocal"
#     print(eggs)
# def becon():
#     eggs = "localbecon"
#     print(eggs)
#     spam()
#     print(eggs)
# eggs = "global"
# becon()
# print(eggs)
# def programmer():
#
#     global eggs,spam
#     eggs,spam = spam,eggs
#
#     print(eggs)
# global eggs
# eggs = 'test'
# spam = 1
# programmer()
# print(eggs)

# def spam():
#     global eggs
#     eggs = "spam"#глобальная переменная
# def becon():
#     eggs = "becon"#локальная переменная
# def finish():
#     print(eggs)#глобальна переменная
# spam()
# eggs = "test"
# eggs = "global"

# print(eggs)

#спомощью ф-ии сделать диапазон от 1 до 10 используя цикл ренж и соответвствено диапазон принимать с инпута,принтавать привет мир


a = int(input())
b = int(input())


def x(a,b):
    for i in range(a, b):
        print("привет мир")

x(a,b)







