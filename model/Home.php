<?php
    class Home {
        /**
         * Função responsavel por receber a string com o numero romano e tratala
         * @param string $string
         * @return int
         */
        public function numeroRomano($string) {
            $romano = [
                'M' => 1000,
                'CM' => 900,
                'D' => 500,
                'CD' => 400,
                'C' => 100,
                'XC' => 90,
                'L' => 50,
                'XL' => 40,
                'X' => 10,
                'IX' => 9,
                'V' => 5,
                'IV' => 4,
                'I' => 1
            ];
            $i = 0;
            $total = 0;
            $str = strtoupper($string);
            $length = strlen($str);

            while ($i < $length) {
                // Verifica se há um número de dois caracteres
                if ($i + 1 < $length && isset($romano[$str[$i] . $str[$i + 1]])) {
                    $total += $romano[$str[$i] . $str[$i + 1]];
                    $i += 2;
                } else {
                    $total += $romano[$str[$i]];
                    $i++;
                }
            }

            return $total;
        }
        
        /**
         * Função responsavel por receber um int e retornar uma string em romano
         * @param int $num
         * @return int
         */
        public function numeroReal($num) {
            $numero = [
                1000 => 'M',
                900 => 'CM',
                500 => 'D',
                400 => 'CD',
                100 => 'C',
                90 => 'XC',
                50 => 'L',
                40 => 'XL',
                10 => 'X',
                9 => 'IX',
                5 => 'V',
                4 => 'IV',
                1 => 'I'
            ];
        
            $total = '';
            foreach ($numero as $n => $romano) {
                while ($num >= $n) {
                    $total .= $romano;
                    $num -= $n;
                }
            }
            return $total;
        }
    }