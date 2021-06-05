# -*- coding: utf-8 -*-
import sys
import tempfile
import numpy as np
import cv2
from matplotlib import pyplot as plt
from PIL import Image, ImageFilter

image = cv2.imread(sys.argv[1:][0]) # reads the image
image = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY) # aplica filtro
cv2.imwrite(sys.argv[1:][1], image) #salva imagem
