<form action="{{ route('penyewaan.store') }}" method="POST">
    @csrf
    <label for="lapangan_id">Pilih Lapangan:</label>
    <select name="lapangan_id" id="lapangan_id" required>
        @foreach($lapangan)
            <option value="{{ $lapangan->id }}">{{ $lapangan->nama }}</option>
        @endforeach
    </select>

    <label for="waktu_mulai">Waktu Mulai:</label>
    <input type="datetime-local" name="waktu_mulai" required>

    <label for="waktu_selesai">Waktu Selesai:</label>
    <input type="datetime-local" name="waktu_selesai" required>

    <label for="total_harga">Total Harga:</label>
    <input type="number" name="total_harga" required>

    <button type="submit">Pesan Lapangan</button>
</form>
