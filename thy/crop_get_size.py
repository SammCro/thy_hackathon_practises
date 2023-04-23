import cv2 
import numpy as np


def crop_image(img):
    return 0


def pixel_to_size():
    return 0


def get_size(img):
    img = cv2.imread(img)


    gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)

    edges = cv2.Canny(gray, 50, 150, apertureSize=3)

    contours, _ = cv2.findContours(edges, cv2.RETR_EXTERNAL, cv2.CHAIN_APPROX_SIMPLE)
    
    # Measure the pixel size of the object
    pixels_per_metric = 10  # Change this value based on your object and image


    
    for contour in contours:
        x, y, w, h = cv2.boundingRect(contour)
        # Compute the size of the object in real-world units
        width = w / pixels_per_metric
        height = h / pixels_per_metric
        print('Width: {}, Height: {}'.format(width, height))
    return width,height