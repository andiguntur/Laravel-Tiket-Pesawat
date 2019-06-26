Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
             $table->string('name_tiket');
             $table->string('harga_tiket');
             $table->string('jenis_tiket');
              $table->unsignedInteger('id_kategori');
            $table->foreign('id_kategori')->references('id')->on('kategoris')->onDelete('cascade');
            $table->string('jumlah_tiket');
            $table->timestamps();
             $table->dropForeign(['id_categories']);

        });