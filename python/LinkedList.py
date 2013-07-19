class Node(object):
    value = None
    next = None

    def __init__(self, value):
        self.value = value

    def __repr__(self):
        return '<Node: %s>' % self.value


class LinkedList(object):
    root = None

    def append(self, node):
        if not self.root:
            self.root = node
        else:
            parent = self.root
            while parent.next:
                parent = parent.next
            parent.next = node

    def __repr__(self):
        nodes = []
        node = self.root
        while node:
            nodes.append(str(node.value))
            node = node.next
        return '<Linked List: [%s]>' % ' -> '.join(nodes)


### Test
#if __name__ == '__main__':
#    ll = LinkedList()
#    ll.append(Node(1))
#    ll.append(Node(2))
#    ll.append(Node(3))
#    ll.append(Node(4))
#    ll.append(Node(5))
#    print ll
