
"below the code for the createtable page";
function oneMorebtn(length){
    for(let i = 0; i< length; i++){
        let moreBtn = document.createElement('input');
        moreBtn.name = "columnName[]"
        moreBtn.className = "oneMorebtn";
        moreBtn.placeholder = "Enter a column name";

        let dataTypes = document.createElement('select')
        dataTypes.name = "dataType[]"
        let selectdataTypes = document.createElement("option");
        selectdataTypes.innerText = "None";
        dataTypes.add(selectdataTypes);

        let int = document.createElement("option");
        int.innerText = "int";
        dataTypes.add(int);

        let varchar = document.createElement("option");
        varchar.innerText = "Varchar(255)";
        dataTypes.add(varchar);

        let timestamp = document.createElement("option");
        timestamp.innerText = "timestamp";
        dataTypes.add(timestamp);

        let date = document.createElement("option");
        date.innerText = "DATETIME";
        dataTypes.add(date);

        document.querySelector('.buttonContainer').appendChild(moreBtn);
        document.querySelector('.buttonContainer').appendChild(dataTypes);

    }
}