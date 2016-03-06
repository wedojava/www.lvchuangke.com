<?php
namespace App;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class AddAvatarToLawyer
{
    protected $lawyer;
    protected $lawyerAvatar;
    protected $file;

    public function __construct(Lawyer $lawyer, UploadedFile $file, Thumbnail $thumbnail = null)
    {
        $this->lawyer = $lawyer;
        $this->file = $file;
        $this->thumbnail = $thumbnail ?: new Thumbnail;
    }

    public function save()
    {
        $lawyer_avatar = $this->lawyer->addLawyerAvatar($this->makeLawyerAvatar());

        // move the avatar to the images folder
        $this->file->move($lawyer_avatar->baseDir(), $lawyer_avatar->name);

        // generate a thumbnail
        $this->thumbnail->make($lawyer_avatar->path, $lawyer_avatar->thumbnail_path);
    }

    public function saveByID($id)
    {
        $lawyer_avatar = $this->lawyer->setLawyerAvatar($this->makeLawyerAvatarByID($id), $id);
        $this->file->move(LawyerAvatar::baseDir(), $lawyer_avatar->name);
        $this->thumbnail->make($lawyer_avatar->path, $lawyer_avatar->thumbnail_path);
    }

    protected function makeLawyerAvatarByID($id)
    {
    	return new LawyerAvatar(['name' => $this->makeFileNameByID($id)]);
    }

    protected function makeFileNameByID($id)
    {
    	$name = "lawyerID_{$id}_avatar.{$this->file->getClientOriginalExtension()}";
    	return $name;
    }

    protected function makeLawyerAvatar()
    {
        return new LawyerAvatar(['name' => $this->makeFileName()]);
    }


    protected function makeFileName()
    {
        $name = sha1(
            time() . $this->file->getClientOriginalName()
        );

        $extension = $this->file->getClientOriginalExtension();

        return "{$name}.{$extension}";
    }
}
