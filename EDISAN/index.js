pdfjsLib.GlobalWorkerOptions.workerSrc = "https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.4.120/pdf.worker.min.js";
        let pdfinput = document.querySelector(".selectpdf");
        let upload = document.querySelector(".upload");
        let afterupload = document.querySelector(".afterupload");
        let select = document.querySelector("select");
        let download = document.querySelector(".download");
        let pdftext = document.querySelector(".pdftext");
        upload.addEventListener('click', () => {
            let file = pdfinput.files[0];
            if (file != undefined && file.type == "application/pdf") {
                let fr = new FileReader();
                fr.readAsDataURL(file);
                fr.onload = () => {
                    let res = fr.result;
                    extractText(res);
                }
            } else {
                alert("Select a valid PDF file");
            }
        });
        let alltext = [];
        async function extractText(url) {
            try {
                let pdf = await pdfjsLib.getDocument(url).promise;
                let pages = pdf.numPages;
                for (let i = 1; i <= pages; i++) {
                    let page = await pdf.getPage(i);
                    let txt = await page.getTextContent();
                    let text = txt.items.map((s) => s.str).join("");
                    alltext.push(text);
                }
                alltext.map((e, i) => {
                    select.innerHTML += `<option value="${i+1}">${i+1}</option>`;
                });
                afterProcess();
            } catch (err) {
                alert(err.message);
            }
        }
        function afterProcess() {
            pdftext.value = alltext[select.value - 1];
            download.href = "data:text/plain;charset=utf-8," + encodeURIComponent(alltext[select.value - 1]);
            afterupload.style.display = "flex";
            document.querySelector(".another").style.display = "unset";
        }