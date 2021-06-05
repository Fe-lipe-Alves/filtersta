import sys
import pytesseract
import shutil
import os
import random
try:
    from PIL import Image
except ImportError:
    import Image

pytesseract.pytesseract.tesseract_cmd = r'C:\Program Files\Tesseract-OCR\tesseract.exe'

extractedInformation = pytesseract.image_to_string(Image.open(sys.argv[1:][0]))
print(extractedInformation)
