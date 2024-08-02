<?php
class Graph {
    private $vertices;
    private $adjList;

    public function __construct($vertices) {
        $this->vertices = $vertices;
        $this->adjList = array_fill(0, $vertices, []);
    }

    public function addEdge($src, $dest) {
        $this->adjList[$src][] = $dest;
        $this->adjList[$dest][] = $src; // برای گراف‌های بدون جهت
    }

    public function convertToTree() {
        $visited = array_fill(0, $this->vertices, false);
        $parent = array_fill(0, $this->vertices, -1);

        for ($i = 0; $i < $this->vertices; $i++) {
            if (!$visited[$i]) {
                $this->removeCyclesDFS($i, -1, $visited, $parent);
            }
        }
    }

    private function removeCyclesDFS($v, $parent, &$visited, &$parent) {
        $visited[$v] = true;

        foreach ($this->adjList[$v] as $neighbor) {
            if (!$visited[$neighbor]) {
                $parent[$neighbor] = $v;
                $this->removeCyclesDFS($neighbor, $v, $visited, $parent);
            } elseif ($neighbor != $parent) {
                // دور پیدا شد، یال را حذف کنید
                $this->removeEdge($v, $neighbor);
            }
        }
    }

    private function removeEdge($u, $v) {
        // حذف یال از لیست مجاورت
        $this->adjList[$u] = array_filter($this->adjList[$u], function ($val) use ($v) {
            return $val != $v;
        });
        $this->adjList[$v] = array_filter($this->adjList[$v], function ($val) use ($u) {
            return $val != $u;
        });
    }
}


$g = new Graph(5);
$g->addEdge(0, 1);
$g->addEdge(1, 2);
$g->addEdge(2, 3);
$g->addEdge(3, 0);
$g->addEdge(2, 4);

$g->convertToTree();
// حالا گراف g یک درخت است
