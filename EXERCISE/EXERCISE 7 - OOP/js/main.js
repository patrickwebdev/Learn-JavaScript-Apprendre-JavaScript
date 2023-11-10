//User-defined function
//Called by index.html each time the form is submitted (onsubmit="user_input()")
function f1_handling() {
  //Collect data from the form
  userInput = document.getElementById("i1").value;

  //Create a session storage to save data
  window.sessionStorage.clear();
  window.sessionStorage.setItem("formData", userInput);

  //Open a new page and close the current one
  window.open("results.html");
  window.close("index.html");
}

//User-defined function
//Called by results.html
function validate_numbers() {
  //Retrieve the data saved in session storage
  var formText = window.sessionStorage.getItem("formData");
  //Convert the single data string to an array of string
  var arrayDataset = formText.split(",");
  //Checks if the element of the array includes only digits from 0 to 9
  var size = arrayDataset.length;
  onlyNumber = true;
  for (let i = 0; i < size; i++) {
    if (!/[0-9]/.test(arrayDataset[i])) {
      onlyNumber = false;
      break;
    }
  }
  //Display appropriate outputs when there are only digits or not
  if (onlyNumber === false) {
    err_msg = "Error! The dataset entered does not include only numbers!";
    document.getElementById("error_message").innerHTML = err_msg;
  } else {
    object1 = new CompareNumbers(arrayDataset);
    document.getElementById("label_data").innerHTML = "DATASET DATA :";
    document.getElementById("label_size").innerHTML = "DATASET SIZE :";
    document.getElementById("label_sum").innerHTML = "DATASET SUM :";
    document.getElementById("label_mean").innerHTML = "DATASET MEAN :";

    document.getElementById("data").innerHTML = object1.showSize().dataset_data;
    document.getElementById("size").innerHTML = object1.showSize().dataset_size;
    document.getElementById("sum").innerHTML = object1.showSum().dataset_sum;
    document.getElementById("mean").innerHTML = object1.showMean().dataset_mean;
  }
}

//Parent - Grand Parent Class
class CountNumbers {
  //Properties
  dataset = 0;
  datasetSize = 0;

  //Constructor Method
  constructor(userData) {
    this.dataset = userData;
  }

  //Method
  setSize() {
    this.datasetSize = this.dataset.length;
  }

  //Method
  showSize() {
    this.setSize();
    var output = { dataset_data: this.dataset, dataset_size: this.datasetSize };
    return output;
  }
}

//Child Class
class CombineNumbers extends CountNumbers {
  //Properties
  datasetSum = 0;

  //Method
  setSum() {
    var sum = 0;
    for (var i = 0; i < this.datasetSize; i++) sum += Number(this.dataset[i]);

    this.datasetSum = sum;
  }

  //Method
  showSum() {
    this.setSum();
    var output = { dataset_sum: this.datasetSum };
    return output;
  }
}

//Child Class
class CompareNumbers extends CombineNumbers {
  //Properties
  datasetMean = 0;

  //Method
  setMean() {
    this.datasetMean = this.datasetSum / this.datasetSize;
  }

  //Method
  showMean() {
    this.setMean();
    var output = { dataset_mean: this.datasetMean };
    return output;
  }
}
