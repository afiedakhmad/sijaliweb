@extends('layout.main')
@section('content')
    <div class="w-full overflow-x-hidden flex flex-col justify-center items-center mt-16">
        <!-- alert section -->
        {{-- @if(session()->has('failed'))
            <div role="alert" class="my-4 w-1/2">
                    <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                        Gagal
                    </div>
                    <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                        <p>Gagal membuat laporan, silakan coba lagi</p>
                        @foreach($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
            </div>
        @endif --}}
        
        <main class="w-full flex flex-grow justify-center p-2 md:p-6 min-h-screen">
            <!-- <div class="flex flex-col justify-center items-center border-solid border-2 border-black"> -->
            <div class="flex flex-col items-center bg-white lg:w-2/3 w-5/6 rounded-lg border drop-shadow-lg overflow-auto">
                <div>
                    <p class="font-semibold text-center text-lg w-full mb-1 p-4 md:text-xl">Formulir Laporan Konseling</p>
                </div>
                <form class="w-full lg:w-4/5 px-4 md:px-10" id="formLaporan" action="/store" method="post" onsubmit="return validasiForm()">
                    @csrf
                    <div class="p-2">
                        <label class="block mb-1 font-bold">Nama</label>
                        <input type="text" id="nama" name="nama" class="w-full bg-gray-100 h-10 p-2">
                    </div>
                    <div class="p-2">
                        <label class="block mb-1 font-bold">Alamat</label>
                        <input type="text" id="alamat" name="alamat" class="w-full bg-gray-100 h-10 p-2">
                    </div>
                    <div class="p-2">
                        <label class="block mb-1 font-bold">Kode</label>
                        <input type="text" id="kode" name="kode" class="w-full bg-gray-100 h-10 p-2">
                    </div>
                    <div class="p-2 flex items-center justify-center">
                        <button type="submit" class="block bg-yellow-500 hover:bg-yellow-600 font-bold p-3 rounded">
                            Submit
                        </button>
                    </div>

                </form>
                
            </div>
            <script>
                const today = new Date()
                const tomorrow = new Date(today)
                tomorrow.setDate(tomorrow.getDate() + 1);

                let year = tomorrow.toLocaleString("default", { year: "numeric" });
                let month = tomorrow.toLocaleString("default", { month: "2-digit" });
                let day = tomorrow.toLocaleString("default", { day: "2-digit" });

                // Generate yyyy-mm-dd date string
                let formattedDate = year + "-" + month + "-" + day;

                // minimal hari
                document.getElementById("selectDay").setAttribute("min", formattedDate);


                function updateLanjutan() {
                    let lanjutan = document.getElementById("tindak_lanjut");
                    let opsi = document.getElementById("opsiLanjut");
                    if(lanjutan.value === "lanjut") {
                        opsi.style.display = "block";
                    } else {
                        opsi.style.display = "none";
                    }
                }

                function updateTimeOptions(dateInputId, timeSelectId) {
                    const dateInput = document.getElementById(dateInputId);
                    const timeSelect = document.getElementById(timeSelectId);

                    const selectedDate = new Date(dateInput.value);
                    const selectedDayOfWeek = selectedDate.getDay(); 
                    
                    if (selectedDayOfWeek === 5 || selectedDayOfWeek === 6 || selectedDayOfWeek === 0) {
                        dateInput.value = ''; // Reset the date input
                        timeSelect.setAttribute("disabled", "disabled"); // Disable the time select as no date is selected
                        timeSelect.innerHTML = '<option value="" disabled selected>Pilih waktu</option>'; // Reset the time options
                        return; // Exit the function as we don't want to proceed in this case
                    }

                    // Define options for Monday and Tuesday
                    const TuesdayOptions = `
                        <option value="" disabled selected>Pilih waktu</option>
                        <option value="09:00-10:00">09:00-10:00</option>
                        <option value="10:00-11:00">10:00-11:00</option>
                        <option value="13:00-14:00">13:00-14:00</option>
                        <option value="14:00-15:00">14:00-15:00</option>
                    `;

                    // Define options for Wednesday and Thursday
                    const OtherOptions = `
                        <option value="" disabled selected>Pilih waktu</option>
                        <option value="10:00-11:00">10:00-11:00</option>
                        <option value="11:00-12:00">11:00-12:00</option>
                        <option value="13:00-14:00">13:00-14:00</option>
                        <option value="14:00-15:00">14:00-15:00</option>
                    `;

                    // Enable the time select and update options based on the selected day
                    if (selectedDayOfWeek === 2) {
                        timeSelect.innerHTML = TuesdayOptions;
                    } else {
                        timeSelect.innerHTML = OtherOptions;
                    } 

                    // Enable or disable the select based on the selected day
                    if (selectedDayOfWeek === 1 || selectedDayOfWeek === 2 || selectedDayOfWeek === 3 || selectedDayOfWeek === 4) {
                        timeSelect.removeAttribute("disabled");
                    } else {
                        timeSelect.setAttribute("disabled", "disabled");
                    }
                }

                function validasiForm() {
                    //let pattern = /^[^\\[\\]{}()*+?|^$.\\\/-]+$/ //pattern yg tidak diperbolehkan
                    let hasilKonseling = document.getElementById("hasil");
                    let solusiKonseling = document.getElementById("solusi");
                    let klasifikasi = document.getElementById("klasifikasi");
                    let lanjutan = document.getElementById("tindak_lanjut");
                    
                    let rtn = true;

                    //klasifikasi tidak boleh kosong
                    if(klasifikasi.value == "") {
                        klasifikasi.classList.add("border");
                        klasifikasi.classList.add("border-red-700");
                        document.getElementById("vklasifikasi").textContent = "Isian tidak boleh kosong";
                        rtn = false;
                    } else {
                        klasifikasi.classList.remove("border");
                        klasifikasi.classList.remove("border-red-700");
                        document.getElementById("vklasifikasi").textContent = "";
                    }

                    //hasil konseling tidak boleh kosong
                    if(hasilKonseling.value == "") {
                        hasilKonseling.classList.add("border");
                        hasilKonseling.classList.add("border-red-700");
                        document.getElementById("vhasil").textContent = "Isian tidak boleh kosong";
                        rtn = false;
                    } else {
                        hasilKonseling.classList.remove("border");
                        hasilKonseling.classList.remove("border-red-700");
                        document.getElementById("vhasil").textContent = "";
                    }

                    //solusi konseling tidak boleh kosong
                    if(solusiKonseling.value == "") {
                        solusiKonseling.classList.add("border");
                        solusiKonseling.classList.add("border-red-700");
                        document.getElementById("vsolusi").textContent = "Isian tidak boleh kosong";
                        rtn = false;
                    } else {
                        solusiKonseling.classList.remove("border");
                        solusiKonseling.classList.remove("border-red-700");
                        document.getElementById("vsolusi").textContent = "";
                    }
                    
                    //tindak lanjut tidak boleh kosong
                    if(lanjutan.value == "") {
                        lanjutan.classList.add("border");
                        lanjutan.classList.add("border-red-700");
                        document.getElementById("vtindak_lanjut").textContent = "Isian tidak boleh kosong";
                        rtn = false;
                    } else {
                        lanjutan.classList.remove("border");
                        lanjutan.classList.remove("border-red-700");
                        document.getElementById("vtindak_lanjut").textContent = "";
                    }

                    // //konseling lanjutan tidak boleh kosong (jika konselor memilih ada konseling lanjutan)
                    // if(opsi.style.display == "block" && tanggalLanjutan.value == "") {
                    //     tanggalLanjutaan.classList.add("border");
                    //     tanggalLanjutan.classList.add("border-red-700");
                    //     rtn = false;
                    // } else {
                    //     tanggalLanjutan.classList.remove("border");
                    //     tanggalLanjutan.classList.remove("border-red-700");
                    // }

                    // if(opsi.style.display == "block" && waktuLanjutan.value == "") {
                    //     waktuLanjutaan.classList.add("border");
                    //     waktuLanjutan.classList.add("border-red-700");
                    //     rtn = false;
                    // } else {
                    //     waktuLanjutan.classList.remove("border");
                    //     waktuLanjutan.classList.remove("border-red-700");
                    // }

                    return rtn;
                }
                
            </script>
        </main>
    </div>
@endsection
