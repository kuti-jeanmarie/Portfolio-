g = [[0 for _ in range(5)] for _ in range(5)]
t = str (input("Le graphe est_il orienté? (0/N)"))
for i in range(5):
    for j in range (5):
        print(f"Sommets {i+1} et {j+1}")
        r = int(input("Y a-t-il une relation (0/1)"))
        if r!= 0:
            g[i][j] = 1
        if t == "N" or t == "n":
            g[j][i]= 1
print(g)