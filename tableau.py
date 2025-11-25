table = [2, 6, 8, 14, 24, 36, 48, 69, 81, 100]

def recherche_bin(t, x):
    gauche = 0
    droite =  len(t) -1
    while gauche <= droite:
        t[milieu] = (gauche + droite) // 2
        if t[milieu] == x:
            return milieu
        else:
            if t[milieu] < x :
                gauche = t[milieu] + 1
            else:
                droite = milieu -1

print(recherche_bin(table, 48))
