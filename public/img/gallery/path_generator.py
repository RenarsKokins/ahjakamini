from os import listdir
from os.path import isfile, join
import pathlib

mypath = pathlib.Path(__file__).parent.resolve()
onlyfiles = [f for f in listdir(mypath) if isfile(join(mypath, f))]

for img in onlyfiles:
    if img.split('.')[-1] in ["py", "gitignore"]:
        continue
    print(f"[\'path\' => \'img/gallery/{img}\'],")