<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionModel extends Model
{
    protected $table = 'transaction';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'username', 'total_harga', 'alamat', 'ongkir', 'status', 'created_at', 'updated_at'
    ];

    public function getTransaksiDenganJumlah()
{
    return $this->select('transactions.*, SUM(transaction_details.jumlah) AS jumlah_item')
                ->join('transaction_details', 'transaction_details.transaction_id = transactions.id')
                ->groupBy('transactions.id')
                ->findAll();
}

}
