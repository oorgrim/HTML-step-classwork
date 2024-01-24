import pygame as pg
import controls
import player

FPS = 25
bg = pg.image.load('supergame/background.jpeg')
pg.init()
clock = pg.time.Clock()
screen = pg.display.set_mode((1024, 768))
me = player.init((95, 159), (512-40, 384-40), "magenta")

gameover = False
while not gameover:
    for event in pg.event.get():
        if event.type == pg.QUIT:
            gameover = True
    controls.check()
    screen.blit(bg, (0,0))
    player.update(me)
    screen.blit(me, player.my_position)
    pg.display.update()
    clock.tick(FPS)