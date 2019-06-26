Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_tiket');
            $table->foreign('id_tiket')->references('id')->on('tikets')->onDelete('cascade');
            $table->string('qty');
            $table->boolean('status')->nullable()->default(false);
            $table->dropForeign(['id_tiket']);
            $table->timestamps();
        });