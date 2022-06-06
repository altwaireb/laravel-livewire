<?php

namespace App\Traits;

trait ToastAlert {

    protected function toast($message, $position = 'top-left', $timer = 2000){
        $this->dispatchBrowserEvent('toast-alert', [
            'type' => 'success',
            'message' => $message,
            'position' => $this->getPosition($position),
            'timer' => $this->getTimer($timer)

        ]);
    }

    protected function toastInfo($message, $position = 'top-left', $timer = 2000){
        $this->dispatchBrowserEvent('toast-alert', [
            'type' => 'info',
            'message' => $message,
            'position' => $this->getPosition($position),
            'timer' => $this->getTimer($timer)

        ]);
    }

    protected function toastWarning($message, $position = 'top-left', $timer = 2000){
        $this->dispatchBrowserEvent('toast-alert', [
            'type' => 'warning',
            'message' => $message,
            'position' => $this->getPosition($position),
            'timer' => $this->getTimer($timer)

        ]);
    }

    protected function toastError($message, $position = 'top-left', $timer = 2000){
        $this->dispatchBrowserEvent('toast-alert', [
            'type' => 'error',
            'message' => $message,
            'position' => $this->getPosition($position),
            'timer' => $this->getTimer($timer)

        ]);
    }

    private function getPosition($position){
        $listPosition = array(
            'top-right',
            'top-left',
            'bottom-left',
            'bottom-right',
            'center',
            'top-center',
            'bottom-center',
            'right-center',
            'left-center',
        );
        if (in_array($position, $listPosition)){
            return $position;
        }else{
            return 'top-left';
        }
    }

    private function getTimer($value ,$min = 600, $max = 9000){
        if (is_integer($value) && $value <= $min && $value >= $max){
            return $value;
        }else {
            return 2000;
        }
    }


}