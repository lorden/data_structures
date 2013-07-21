class Queue(object):
    items = []

    def enqueue(self, value):
        self.items.append(value)

    def dequeue(self):
        dequeued = self.items[0]
        self.items = self.items[1:]
        return dequeued

    def peek(self):
        return self.items[0]

    def __repr__(self):
        return "FRONT [ " + ' | '.join([str(x) for x in self.items]) + \
               " ] BACK"

## Test
# if __name__ == '__main__':
#     q = Queue()
#     q.enqueue(1)
#     q.enqueue(2)
#     print 'Peek %s' % q.peek()
#     q.enqueue(3)
#     q.enqueue(4)
#     print 'Dequeued %s' % q.dequeue()
#     q.enqueue(5)
#     print 'Dequeued %s' % q.dequeue()
#     print 'Peek %s' % q.peek()
#     print 'Dequeued %s' % q.dequeue()
#     q.enqueue(6)
#     print 'Peek %s' % q.peek()
#     print q
