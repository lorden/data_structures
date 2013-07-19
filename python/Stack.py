class Stack(object):
    items = []

    def push(self, value):
        self.items.append(value)

    def pop(self):
        popped = self.items[len(self.items)-1]
        self.items = self.items[:-1]
        return popped

    def isempty(self):
        if not self.items:
            return True
        return False

    def peek(self):
        return self.items[-1]

    def __repr__(self):
        output = "TOP\n"
        i = len(self.items) - 1
        while i >= 0:
            output += str(self.items[i]) + "\n"
            i -= 1
        output += "BOTTOM"
        return output
        

## Test
# if __name__ == '__main__':
#     s = Stack()
#     s.push(1)
#     s.push(2)
#     print 'Peek %s' % s.peek()
#     s.push(3)
#     s.push(4)
#     print 'Popped %s' % s.pop()
#     s.push(5)
#     print 'Popped %s' % s.pop()
#     print 'Peek %s' % s.peek()
#     print 'Popped %s' % s.pop()
#     s.push(6)
#     print 'Peek %s' % s.peek()
#     print s
