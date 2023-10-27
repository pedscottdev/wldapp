@extends('layouts.app')
@section('content')
<title>Quản lý sấy gỗ</title>
<style>
    .page-container{
        /* height: 90vh; */
    }

    .menu-section{
        display: flex;
        flex-direction: column;
        padding-right: 1rem;
        margin-bottom: 1rem;
    }

    /* Card Styles */
    .go-corner {
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        width: 32px;
        height: 32px;
        overflow: hidden;
        top: 0;
        right: 0;
        background-color: #106791;
        border-radius: 0 4px 0 32px;
    }

    .go-arrow {
        margin-top: -4px;
        margin-right: -4px;
        color: white;
        font-family: courier, sans;
    }

    .card2 {
        display: flex;
        align-items: center;
        top: 0px;
        position: relative;
        width: 100%;
        /* max-width: 262px; */
        background-color: #fff;
        border-radius: 12px;
        padding: 20px 24px;
        margin: 10px 4px;
        text-decoration: none;
        z-index: 0;
        overflow: hidden;
        border: 1px solid #f2f8f9;
    }

    .card2:hover {
        transition: all 0.2s ease-out;
        box-shadow: 0px 4px 8px rgba(38, 38, 38, 0.2);
        top: -4px;
        /* border: 1px solid #cccccc; */
        background-color: white;
        border: 1px solid #5e93ac;
    }

    .card2:hover h4 {
        color: #106791;
    }

    .card2:before {
        content: "";
        position: absolute;
        z-index: -1;
        top: -16px;
        right: -16px;
        background: #00838d;
        height: 32px;
        width: 32px;
        border-radius: 32px;
        transform: scale(2);
        transform-origin: 50% 50%;
        transition: transform 0.15s ease-out;
    }

    .card2:hover:before {
        transform: scale(2.15);
    }   

    .card2 h4{
        align-items: center;
        font-size: 1.35rem;
    }

    .card-info p{
        margin-bottom: 0;
    }

    /* Menu Styles */
    .menu-icon{
        font-size: 1.5rem;
        margin-left: 1rem;
        margin-right: 2.5rem;
        padding: 1rem;
        background-color: #ecf9ff;
        color: #106791;
        border-radius: 0.5rem;
    }

</style>
<div class="page-container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4" style="padding-bottom: 0 !important">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="/">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Quản lý sấy gỗ</li>
                </ol>
            </nav>
            <h2 class="h4 page-title">Quản lý sấy gỗ</h2>
        </div>
        <!-- <div class="btn-toolbar mb-2 mb-md-0">
            <a href="#" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
                <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                New Plan
            </a>
        </div> -->
    </div>
    <div class="menu-section">
        <a class="card2" href="/woodworking/wood-sorting">
            <div class="card-icon">
                <i class="fas fa-stream menu-icon"></i>
            </div>
            <div class="card-info">
                <h4>Sếp sấy</h4>
                <p class="small">Card description with lots of great facts and interesting details.</p> 
            </div>         
            <div class="go-corner" href="#">
                <div class="go-arrow">
                    →
                </div>
            </div>
        </a>
        <a class="card2" href="/woodworking/create-drying-kiln">
            <div class="card-icon">
                <i class="fas fa-kaaba menu-icon"></i>
            </div>
            <div class="card-info">
                <h4>Tạo lò</h4>
                <p class="small">Card description with lots of great facts and interesting details.</p> 
            </div>         
            <div class="go-corner" href="#">
                <div class="go-arrow">
                    →
                </div>
            </div>
        </a>
        <a class="card2" href="/woodworking/load-into-kiln">
            <div class="card-icon">
                <i class="fas fa-warehouse menu-icon"></i>
            </div>
            <div class="card-info">
                <h4>Vào lò</h4>
                <p class="small">Card description with lots of great facts and interesting details.</p> 
            </div>         
            <div class="go-corner" href="#">
                <div class="go-arrow">
                    →
                </div>
            </div>
        </a>
        
        <a class="card2" href="/woodworking/qc-check">
            <div class="card-icon">
                <i class="fas fa-drum-steelpan menu-icon"></i>
            </div>
            <div class="card-info">
                <h4>Kiểm tra mẻ sấy</h4>
                <p class="small">Card description with lots of great facts and interesting details.</p> 
            </div>         
            <div class="go-corner" href="#">
                <div class="go-arrow">
                    →
                </div>
            </div>
        </a>
        
    </div>  
</div>
@endsection

