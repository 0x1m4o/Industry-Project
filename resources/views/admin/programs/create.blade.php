<form>
    <div class="mb-3">
      <label for="program" class="form-label">Nama Program</label>
      <input type="text" class="form-control" id="program" placeholder="Masukkan nama program anda">
    </div>
    <div class="mb-3">
      <label for="deskripsi" class="form-label">Deskripsi</label>
      {{-- <input type="text" class="form-control" id="deskripsi"> --}}
      <textarea name="" id="deskripsi" cols="30" rows="10"></textarea>
    </div>
    <div class="mb-3">
        <select class="form-select">
            <option selected value="programming">Programming</option>
            <option value="design">Design</option>
            <option value="networking">Networking</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>