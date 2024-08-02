class Graph:
    def __init__(self, vertices):
        self.V = vertices
        self.graph = [[0 for _ in range(vertices)] for _ in range(vertices)]  # ماتریس مجاورت را به صورت دقیق تعریف می‌کنیم
        self.edges = 0

    def addEdge(self, u, v):
        self.graph[u][v] = 1
        self.graph[v][u] = 1
        self.edges += 1

    def isCyclicUtil(self, v, visited, parent):
        visited[v] = True

        for neighbor in range(self.V):
            if neighbor == v:
                continue
            if not visited[neighbor]:
                if self.isCyclicUtil(neighbor, visited, v):
                    return True
            elif neighbor != parent:
                return True

        return False

    def isCyclic(self):
        visited = [False] * self.V
        for i in range(self.V):
            if not visited[i] and self.isCyclicUtil(i, visited, -1):
                return True
        return False

    def convertToTree(self):
        if not self.isCyclic():
            print("Graph is already a tree.")
            return

        visited = [False] * self.V
        for i in range(self.V):
            if not visited[i]:
                self.removeCyclesDFS(i, -1, visited)

    def removeCyclesDFS(self, v, parent, visited):
        visited[v] = True
        for neighbor in range(self.V):
            if not visited[neighbor]:
                self.removeCyclesDFS(neighbor, v, visited)
            elif neighbor != parent:
                self.graph[v][neighbor] = 0
                self.graph[neighbor][v] = 0
                self.edges -= 1  # تعداد یال‌ها را کاهش می‌دهیم

# مثال با ورودی مشخص شده
g = Graph(5)
g.addEdge(0, 1)
g.addEdge(0, 2)
g.addEdge(1, 2)
g.addEdge(3, 4)

g.convertToTree()
print("تعداد یال‌های حذف شده:", g.edges)
