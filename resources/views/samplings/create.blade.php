@extends('layout.master')

@section('page')
    Halaman Sampling
@endsection

@section('title')
    Tambah Sampling
@endsection

@section('content')
    <div class="mb-6">
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
            <h2 class="text-lg font-semibold mb-4 text-gray-800 dark:text-gray-100">Form Tambah Sampling</h2>
            <form action="{{ route('sampling.store') }}" method="POST">
                @csrf

                {{-- Ticket ID --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6 items-end">
                    <div class="md:col-span-2">
                        <label for="ticketID" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                            Ticket ID
                        </label>
                        <input
                            type="text"
                            name="ticket_id"
                            id="ticketID"
                            value="{{ $randomParticipant->nama ?? 'Choose a ticket' }}"
                            readonly
                            required
                            class="w-full border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg shadow-sm"
                        >
                    </div>
                    <div class="mt-2 md:mt-0">
                        <a href="{{ route('sampling.create', ['pick' => 1]) }}"
                           class="inline-block w-full text-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                            Pick Ticket
                        </a>
                    </div>
                </div>

                {{-- Kolom lainnya --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="namaQA" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Nama QA</label>
                        <select name="nama_qa" id="namaQA" required
                                class="w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg shadow-sm">
                            <option value="">-- Pilih Nama QA --</option>
                            @foreach ($qaList as $qa)
                                <option value="{{ $qa->nama }}">{{ $qa->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="levelAgent" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Level Agent</label>
                        <select name="level_agent" id="levelAgent" required class="w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg shadow-sm">
                            <option value="">-- Pilih Level Agent --</option>
                            <option value="Agent">Agent</option>
                            <option value="Senior Agent">Senior Agent</option>
                        </select>
                    </div>
                    <div>
                        <label for="namaAgent" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Nama Agent</label>
                        <select name="nama_agent" id="namaAgent" required class="w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg shadow-sm">
                            <option value="">-- Pilih Nama Agent --</option>
                        </select>
                    </div>
                    <div>
                        <label for="teamLeader" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Team Leader</label>
                        <input type="text" name="team_leader" id="teamLeader" readonly
                               class="w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg shadow-sm" required>
                    </div>
                    <div>
                        <label for="program" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Program</label>
                        <input type="text" name="program" id="program" readonly
                               class="w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg shadow-sm" required>
                    </div>
                    <div>
                        <label for="kanal" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Kanal</label>
                        <select name="kanal" id="kanal" class="w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg shadow-sm" required>
                            <option value="">-- Pilih Kanal --</option>
                            <option value="WalkIn">Walk In</option>
                            <option value="Voice">Voice</option>
                            <option value="NonVoice">Non Voice</option>
                        </select>
                    </div>
                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Category</label>
                        <select name="category" id="category" class="w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg shadow-sm" required>
                            <option value="">-- Pilih Category --</option>
                        </select>
                    </div>
                    <div>
                        <label for="eventDateTime" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Event Date & Time</label>
                        <input type="datetime-local" name="event_datetime" id="eventDateTime" class="w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg shadow-sm" required>
                    </div>
                    <div class="col-span-2">
                        <label for="konten" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Konten</label>
                        <textarea name="konten" id="konten" rows="3" class="w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg shadow-sm" required></textarea>
                    </div>
                </div>

                {{-- Comprehension --}}
                <h3 class="text-md font-bold mb-2 text-gray-800 dark:text-gray-100">Comprehension</h3>
                @foreach ([
                    ['label' => 'Pemahaman', 'name' => 'scorePemahaman', 'id' => 'pemahaman', 'weight' => 'weightPemahaman', 'options' => range(0,5), 'value' => 20],
                    ['label' => 'Investigasi', 'name' => 'scoreInvestigasi', 'id' => 'investigasi', 'weight' => 'weightInvestigasi', 'options' => range(0,5), 'value' => 20],
                ] as $field)
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                        <div>
                            <label for="{{ $field['id'] }}" class="block text-sm font-medium text-gray-700 dark:text-gray-200">{{ $field['label'] }}</label>
                            <textarea name="{{ $field['id'] }}" id="{{ $field['id'] }}" rows="3" class="w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg shadow-sm" required></textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">Score {{ $field['label'] }}</label>
                            <div class="flex items-center gap-2 flex-wrap">
                                @foreach ($field['options'] as $opt)
                                    <label class="inline-flex items-center text-gray-700 dark:text-gray-200">
                                        <input type="radio" name="{{ $field['name'] }}" value="{{ $opt }}" class="form-radio text-blue-600" required>
                                        <span class="ml-2">{{ $opt }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">Weight {{ $field['label'] }}</label>
                            <input type="number" name="{{ $field['weight'] }}" id="{{ $field['weight'] }}" class="w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg shadow-sm" readonly>
                        </div>
                    </div>
                @endforeach

                {{-- Ticket Handling --}}
                <h3 class="text-md font-bold mb-2 text-gray-800 dark:text-gray-100">Ticket Handling</h3>
                @foreach ([
                    ['label' => 'Respon', 'name' => 'scoreRespon', 'id' => 'respon', 'weight' => 'weightRespon', 'options' => [['Fail', 0], ['Pass', 5]], 'value' => 20],
                    ['label' => 'Tagging', 'name' => 'scoreTagging', 'id' => 'tagging', 'weight' => 'weightTagging', 'options' => [['No', 0], ['Yes', 5]], 'value' => 5],
                    ['label' => 'Kategori', 'name' => 'scoreKategori', 'id' => 'kategori', 'weight' => 'weightKategori', 'options' => [['No', 0], ['Yes', 5]], 'value' => 5],
                    ['label' => 'Catatan Internal', 'name' => 'scoreCatatanInternal', 'id' => 'catatanInternal', 'weight' => 'weightCatatanInternal', 'options' => range(0,5), 'value' => 10],
                    ['label' => 'Kustomisasi', 'name' => 'scoreKustomisasi', 'id' => 'kustomisasi', 'weight' => 'weightKustomisasi', 'options' => range(0,5), 'value' => 20],
                ] as $field)
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                        <div>
                            <label for="{{ $field['id'] }}" class="block text-sm font-medium text-gray-700 dark:text-gray-200">{{ $field['label'] }}</label>
                            <textarea name="{{ $field['id'] }}" id="{{ $field['id'] }}" rows="3" class="w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg shadow-sm" required></textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">Score {{ $field['label'] }}</label>
                            <div class="flex items-center gap-2 flex-wrap">
                                @foreach ($field['options'] as $opt)
                                    @php
                                        $val = is_array($opt) ? $opt[1] : $opt;
                                        $text = is_array($opt) ? $opt[0] : $opt;
                                    @endphp
                                    <label class="inline-flex items-center text-gray-700 dark:text-gray-200">
                                        <input type="radio" name="{{ $field['name'] }}" value="{{ $val }}" class="form-radio text-blue-600" required>
                                        <span class="ml-2">{{ $text }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">Weight {{ $field['label'] }}</label>
                            <input type="number" name="{{ $field['weight'] }}" id="{{ $field['weight'] }}" class="w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg shadow-sm" readonly>
                        </div>
                    </div>
                @endforeach

                <div class="mb-4">
                    <label for="scoreOverall" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Overall Score</label>
                    <input type="number" name="scoreOverall" id="scoreOverall" class="w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg shadow-sm" readonly>
                </div>

                <div class="mb-4">
                    <label for="catatan" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Catatan</label>
                    <textarea name="catatan" id="catatan" rows="3" class="w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg shadow-sm"></textarea>
                </div>

                <div class="mb-6">
                    <label for="attachfile" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Attach File</label>
                    <textarea name="attachfile" id="attachfile" rows="3" class="w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg shadow-sm"></textarea>
                </div>

                <button type="submit" class="px-4 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700">Submit Data</button>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const levelSelect = document.getElementById('levelAgent');
            const namaSelect = document.getElementById('namaAgent');

            levelSelect.addEventListener('change', function () {
                const level = this.value;

                // Reset dropdown nama agent
                namaSelect.innerHTML = '<option value="">-- Pilih Nama Agent --</option>';

                if (!level) return;

                fetch(`/agents-by-level/${level}`)
                    .then(response => response.json())
                    .then(data => {
                        Object.entries(data).forEach(([id, nama]) => {
                            const option = document.createElement('option');
                            option.value = id;
                            option.text = nama;
                            namaSelect.appendChild(option);
                        });
                    })
                    .catch(error => {
                        console.error('Gagal ambil agent:', error);
                    });
            });
        });
    </script>
    <script>
        document.getElementById('namaAgent').addEventListener('change', function () {
            const agentId = this.value;

            if (!agentId) return;

            fetch(`/get-agent-detail/${agentId}`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('teamLeader').value = data.team_leader || '';
                    document.getElementById('program').value = data.program || '';

                    // Setelah program di-set, fetch kategori
                    fetchCategories(data.program);
                })
                .catch(error => {
                    console.error('Error:', error);
                    document.getElementById('teamLeader').value = '';
                    document.getElementById('program').value = '';
                    document.getElementById('category').innerHTML = '<option value="">-- Pilih Category --</option>';
                });
        });

    </script>

    <script>
        function fetchCategories(program) {
            const categorySelect = document.getElementById('category');
            if (!program) {
                categorySelect.innerHTML = '<option value="">-- Pilih Category --</option>';
                return;
            }

            fetch(`/categories-by-program/${program}`)
                .then(response => response.json())
                .then(data => {
                    categorySelect.innerHTML = '<option value="">-- Pilih Category --</option>';
                    Object.entries(data).forEach(([id, name]) => {
                        const option = document.createElement('option');
                        option.value = name;
                        option.text = name;
                        categorySelect.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error("Gagal memuat kategori:", error);
                });
        }

    </script>


    <script>
        function calculateWeight(score, weight) {
            if (!isNaN(score)) return (weight / 5) * score;
            if (score === 'pass' || score === 'yes' || score === '5') return weight;
            if (score === 'fail' || score === 'no' || score === '0') return 0;
            return 0;
        }

        const scoreToWeightIdMap = {
            scorePemahaman: 'weightPemahaman',
            scoreInvestigasi: 'weightInvestigasi',
            scoreRespon: 'weightRespon',
            scoreTagging: 'weightTagging',
            scoreKategori: 'weightKategori',
            scoreCatatanInternal: 'weightCatatanInternal',
            scoreKustomisasi: 'weightKustomisasi'
        };

        function bindScoreListener(name, weight, isNumeric = true) {
            document.querySelectorAll(`input[name="${name}"]`).forEach(radio => {
                radio.addEventListener('change', () => {
                    let score = document.querySelector(`input[name="${name}"]:checked`).value;
                    if (isNumeric) score = parseInt(score);
                    const weightInput = document.getElementById(scoreToWeightIdMap[name]);
                    if (weightInput) {
                        weightInput.value = Math.round(calculateWeight(score, weight));
                    }
                    updateOverallScore();
                });
            });
        }

        function updateOverallScore() {
            const weightIds = Object.values(scoreToWeightIdMap);
            let total = 0;
            weightIds.forEach(id => {
                const el = document.getElementById(id);
                total += parseFloat(el?.value) || 0;
            });
            document.getElementById("scoreOverall").value = Math.round(total);
        }

        document.addEventListener('DOMContentLoaded', function () {
            bindScoreListener("scorePemahaman", 20);
            bindScoreListener("scoreInvestigasi", 20);
            bindScoreListener("scoreRespon", 20, false);
            bindScoreListener("scoreTagging", 5, false);
            bindScoreListener("scoreKategori", 5, false);
            bindScoreListener("scoreCatatanInternal", 10);
            bindScoreListener("scoreKustomisasi", 20);
        });
    </script>
@endpush
