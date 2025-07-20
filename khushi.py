def outer ():
    print("outer function started")
    def inner():
        print("inner function execution")
    print("outer function returning inner function")
    inner()
    return inner
    f1=outer()
    f2=outer
    f1()
    f2()
def f1(f2):
    return lambda x:f2(x)+5
def f2(x):
    return x+5
a=f1(f2)
print(a(5))    