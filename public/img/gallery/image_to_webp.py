from PIL import Image
from os import listdir
from os.path import isfile, join
import pathlib

def convert_to_webp(path, mypath):
    image = Image.open(f"{str(mypath)}/{path}")
    original_w, original_h = image.size[0], image.size[1]

    if original_w > 1080:
        w, h = 1080, int((1080 / original_w) * original_h)
        image = image.resize((w, h), Image.LANCZOS)
    image.save(f"{str(mypath)}/converted/{path.split('.')[0]}.webp", format="webp")

def main():
    mypath = pathlib.Path(__file__).parent.resolve()
    images = [f for f in listdir(mypath) if isfile(join(mypath, f))]

    for img in images:
        if img.split('.')[-1] in ["py", "gitignore"]:
            continue
        convert_to_webp(img, mypath)

main()