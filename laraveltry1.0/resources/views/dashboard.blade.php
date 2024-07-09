<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-red-800 dark:text-blue-300 leading-tight">
            {{ __('FNSS Savunma Sistemleri') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red-600 dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                <div class="text-white dark:text-white">
                    {{ __("FNSS Savunma Sistemleri A.Ş.'ye hoş geldiniz, ") }}{{ Auth::User()->username }}!
                </div>
            </div>

            <!-- FNSS Kartı -->
            <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow hover:bg-blue-100 dark:hover:bg-gray-600 transition mt-8">
                <a href="https://www.fnss.com.tr/en" target="_blank">
                    <h3 class="text-lg font-medium text-red-700 dark:text-gray-100 mb-2">FNSS Savunma Sistemleri</h3>
                    <p class="text-gray-600 dark:text-gray-300">FNSS Savunma Sistemleri A.Ş. (Kısa adı FNSS), Türkiye’de savunma sanayine yönelik ilk özel sektör kuruluşu olup, %51 hissesi Nurol Holding’e, %49 hissesi BAE Systems’e aittir. Şirket, Türk Silahlı Kuvvetleri ve müttefik ülkelerin silahlı kuvvetlerinin kullanımı için paletli ve tekerlekli Zırhlı Muharebe Araç aileleri ile Silah Sistemleri’nin tasarım, üretim ve satışını gerçekleştirmektedir. 1986 yılında kurulan FNSS, 1990 yılında ilk üretimine başlamış olup, bugüne kadar 4.000’in üzerinde zırhlı muharebe aracı üretmiş ve satmıştır. Türkiye dışında Suudi Arabistan, Birleşik Arap Emirlikleri ve Malezya'da ofisleri bulunmaktadır.</p>
                </a>
            </div>

            <!-- FNSS Zırhlı Araç Resimleri -->
            <div class="mt-10">
                <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow">
                    <h3 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">FNSS Tarafından Üretilen Zırhlı Araçlar</h3>
                    <div class="flex overflow-x-scroll space-x-4">
                        <div class="flex-none w-72 h-56"> <!-- Adjusted width and height -->
                            <img src="{{ asset('images/zırhlı_arac.webp') }}" alt="Zırhlı Araç 1" class="w-full h-full object-cover rounded-lg">
                        </div>
                        <div class="flex-none w-72 h-56"> <!-- Adjusted width and height -->
                            <img src="{{ asset('images/zırhlı_arac2.webp') }}" alt="Zırhlı Araç 2" class="w-full h-full object-cover rounded-lg">
                        </div>
                        <div class="flex-none w-72 h-56"> <!-- Adjusted width and height -->
                            <img src="{{ asset('images/zırhlı_arac3.png') }}" alt="Zırhlı Araç 3" class="w-full h-full object-cover rounded-lg">
                        </div>
                        <div class="flex-none w-72 h-56"> <!-- Adjusted width and height -->
                            <img src="{{ asset('images/zırhlı_arac4.webp') }}" alt="Zırhlı Araç 4" class="w-full h-full object-cover rounded-lg">
                        </div>
                        <div class="flex-none w-72 h-56"> <!-- Adjusted width and height -->
                            <img src="{{ asset('images/zırhlı_arac5.webp') }}" alt="Zırhlı Araç 5" class="w-full h-full object-cover rounded-lg">
                        </div>
                    </div>
                </div>
            </div>


            <!-- Diğer Başlıklar ve İçerikleri -->
            <div class="mt-10">
                <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow">
                    <h3 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">FNSS Tarihçesi</h3>
                    <p class="text-gray-600 dark:text-gray-300">FNSS Savunma Sistemleri A.Ş., 1986 yılında Türkiye’nin savunma sanayii ihtiyaçlarını karşılamak amacıyla kurulmuştur. 1990 yılında ilk üretimine başlayan FNSS, bugüne kadar 4.000’in üzerinde zırhlı muharebe aracı üretmiş ve dünya genelinde birçok ülkeye ihraç etmiştir. FNSS, hem Türk Silahlı Kuvvetleri’nin hem de müttefik ülkelerin envanterinde önemli bir yere sahiptir.</p>
                </div>

                <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow mt-6">
                    <h3 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">FNSS Ürünleri</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow">
                            <h4 class="text-lg font-medium text-gray-800 dark:text-white mb-2">Zırhlı Muharebe Araçları</h4>
                            <p class="text-gray-600 dark:text-gray-300">FNSS, çeşitli zırhlı muharebe araçları tasarlamakta ve üretmektedir. Bu araçlar arasında Pars 4x4, Pars 6x6 ve Pars 8x8 gibi modeller bulunmaktadır.</p>
                        </div>
                        <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow">
                            <h4 class="text-lg font-medium text-gray-800 dark:text-white mb-2">Taktik Tekerlekli Araçlar</h4>
                            <p class="text-gray-600 dark:text-gray-300">FNSS, farklı görevler için tasarlanmış taktik tekerlekli araçlar da üretmektedir. Bu araçlar yüksek hareket kabiliyeti ve koruma seviyesi sunmaktadır.</p>
                        </div>
                        <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow">
                            <h4 class="text-lg font-medium text-gray-800 dark:text-white mb-2">Silah Sistemleri</h4>
                            <p class="text-gray-600 dark:text-gray-300">FNSS, çeşitli silah sistemleri geliştirmekte ve üretmektedir. Bu sistemler, muharebe araçlarının ateş gücünü artırmak için tasarlanmıştır.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow mt-6">
                    <h3 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">FNSS Projeleri</h3>
                    <p class="text-gray-600 dark:text-gray-300">FNSS, yurt içi ve yurt dışında birçok önemli projeye imza atmıştır. Bu projeler arasında çeşitli zırhlı araçların geliştirilmesi ve üretimi, yurtdışında açılan ofisler ve stratejik iş birlikleri yer almaktadır.</p>
                </div>

                <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow mt-6">
                    <h3 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">İletişim</h3>
                    <p class="text-gray-600 dark:text-gray-300">FNSS ile iletişime geçmek için aşağıdaki bilgileri kullanabilirsiniz:</p>
                    <ul class="list-disc list-inside text-gray-600 dark:text-gray-300">
                        <li>Adres: FNSS Savunma Sistemleri A.Ş., Oğulbey Mahallesi, Kumludere Caddesi, No:11, 06830 Gölbaşı, Ankara, Türkiye</li>
                        <li>Telefon: +90 (312) 484 8000</li>
                        <li>Email: info@fnss.com.tr</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
