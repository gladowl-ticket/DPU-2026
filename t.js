// Find duplicates in array

const iArr = [10, 11, 12, 10, 11, 12, 10, 11, 12, 10, 11, 12, 10, 11, 12];

function display(iArr) {
  let iUniqueArr = [];

  for (let i = 0; i < iArr.length; i++) {
    let isDuplicate = false;

    for (let j = 0; j < iUniqueArr.length; j++) {
      if (iArr[i] == iUniqueArr[j]) {
        isDuplicate = true;
        break;
      }
    }
    if (!isDuplicate) {
      iUniqueArr.push(iArr[i]);
    }
  }
  console.log(iUniqueArr);
}
display(iArr);
