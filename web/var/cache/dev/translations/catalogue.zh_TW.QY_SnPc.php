<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('zh_TW', array (
  'validators' => 
  array (
    'This value should be false.' => '該變數的值應為 false 。',
    'This value should be true.' => '該變數的值應為 true 。',
    'This value should be of type {{ type }}.' => '該變數的類型應為 {{ type }} 。',
    'This value should be blank.' => '該變數應為空。',
    'The value you selected is not a valid choice.' => '選定變數的值不是有效的選項。',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => '您至少要選擇 {{ limit }} 個選項。',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => '您最多能選擇 {{ limit }} 個選項。',
    'One or more of the given values is invalid.' => '一個或者多個給定的值無效。',
    'This field was not expected.' => '此字段是沒有預料到。',
    'This field is missing.' => '此字段缺失。',
    'This value is not a valid date.' => '該值不是一個有效的日期（date）。',
    'This value is not a valid datetime.' => '該值不是一個有效的日期時間（datetime）。',
    'This value is not a valid email address.' => '該值不是一個有效的郵件地址。',
    'The file could not be found.' => '找不到檔案。',
    'The file is not readable.' => '無法讀取檔案。',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => '檔案太大 ({{ size }} {{ suffix }})。檔案大小不可以超過 {{ limit }} {{ suffix }} 。',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => '無效的檔案類型 ({{ type }}) 。允許的檔案類型有 {{ types }} 。',
    'This value should be {{ limit }} or less.' => '這個變數的值應該小於或等於 {{ limit }}。',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => '字串太長，長度不可超過 {{ limit }} 個字元。',
    'This value should be {{ limit }} or more.' => '該變數的值應該大於或等於 {{ limit }}。',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => '字串太短，長度不可少於 {{ limit }} 個字元。',
    'This value should not be blank.' => '該變數不應為空白。',
    'This value should not be null.' => '該值不應為 null 。',
    'This value should be null.' => '該值應為 null 。',
    'This value is not valid.' => '無效的數值 。',
    'This value is not a valid time.' => '該值不是一個有效的時間。',
    'This value is not a valid URL.' => '該值不是一個有效的 URL 。',
    'The two values should be equal.' => '這兩個變數的值應該相等。',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => '檔案太大，檔案大小不可以超過 {{ limit }} {{ suffix }}。 ',
    'The file is too large.' => '檔案太大。',
    'The file could not be uploaded.' => '無法上傳此檔案。',
    'This value should be a valid number.' => '該值應該為有效的數字。',
    'This file is not a valid image.' => '該檔案不是有效的圖片。',
    'This is not a valid IP address.' => '該值不是有效的IP地址。',
    'This value is not a valid language.' => '該值不是有效的語言名。',
    'This value is not a valid locale.' => '該值不是有效的區域值（locale）。',
    'This value is not a valid country.' => '該值不是有效的國家名。',
    'This value is already used.' => '該值已經被使用。',
    'The size of the image could not be detected.' => '不能解析圖片大小。',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => '圖片太寬 ({{ width }}px)，最大寬度為 {{ max_width }}px 。',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => '圖片寬度不夠 ({{ width }}px)，最小寬度為 {{ min_width }}px 。',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => '圖片太高 ({{ height }}px)，最大高度為 {{ max_height }}px 。',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => '圖片高度不夠 ({{ height }}px)，最小高度為 {{ min_height }}px 。',
    'This value should be the user\'s current password.' => '該變數的值應為用戶目前的密碼。',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => '該變數應為 {{ limit }} 個字元。',
    'The file was only partially uploaded.' => '該檔案的上傳不完整。',
    'No file was uploaded.' => '沒有上傳任何檔案。',
    'No temporary folder was configured in php.ini.' => 'php.ini 裡沒有配置臨時目錄。',
    'Cannot write temporary file to disk.' => '暫存檔寫入磁碟失敗。',
    'A PHP extension caused the upload to fail.' => '某個 PHP 擴展造成上傳失敗。',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => '該集合最少應包含 {{ limit }} 個元素。',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => '該集合最多包含 {{ limit }} 個元素。',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => '該集合應包含 {{ limit }} 個元素 element 。',
    'Invalid card number.' => '無效的信用卡號。',
    'Unsupported card type or invalid card number.' => '不支援的信用卡類型或無效的信用卡號。',
    'This is not a valid International Bank Account Number (IBAN).' => '該值不是有效的國際銀行帳號（IBAN）。',
    'This value is not a valid ISBN-10.' => '該值不是有效的10位國際標準書號（ISBN-10）。',
    'This value is not a valid ISBN-13.' => '該值不是有效的13位國際標準書號（ISBN-13）。',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => '該值不是有效的國際標準書號（ISBN-10 或 ISBN-13）。',
    'This value is not a valid ISSN.' => '該值不是有效的國際標準期刊號（ISSN）。',
    'This value is not a valid currency.' => '該值不是有效的貨幣名（currency）。',
    'This value should be equal to {{ compared_value }}.' => '該值應等於 {{ compared_value }} 。',
    'This value should be greater than {{ compared_value }}.' => '該值應大於 {{ compared_value }} 。',
    'This value should be greater than or equal to {{ compared_value }}.' => '該值應大於或等於 {{ compared_value }} 。',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => '該值應與 {{ compared_value_type }} {{ compared_value }} 相同。',
    'This value should be less than {{ compared_value }}.' => '該值應小於 {{ compared_value }} 。',
    'This value should be less than or equal to {{ compared_value }}.' => '該值應小於或等於 {{ compared_value }} 。',
    'This value should not be equal to {{ compared_value }}.' => '該值應不等於 {{ compared_value }} 。',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => '該值不應與 {{ compared_value_type }} {{ compared_value }} 相同。',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => '圖像格式過大 ({{ ratio }})。 最大允許尺寸 {{ max_ratio }}。',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => '圖像格式過小 ({{ ratio }})。最小尺寸 {{ min_ratio }}。',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => '方形圖像 ({{ width }}x{{ height }}px)。不接受方形圖像。',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => '紀念冊布局圖像 ({{ width }}x{{ height }}px)。 不接受紀念冊布局圖像。',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => '書籍布局圖像 ({{ width }}x{{ height }}px)。不接受圖像書籍布局。',
    'An empty file is not allowed.' => '不接受空白文件。',
    'The host could not be resolved.' => '未找到服務器。',
    'This value does not match the expected {{ charset }} charset.' => '該數值不符合預期 {{ charset }} 符號編碼。',
    'This is not a valid Business Identifier Code (BIC).' => '無效企業識別碼 (BIC)。',
    'Error.' => '錯誤。',
    'This is not a valid UUID.' => '無效的通用唯壹標識符 (UUID)。',
    'This value should be a multiple of {{ compared_value }}.' => '該值必須是倍數 {{ compared_value }}。',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => '該企業識別碼 (BIC) 與銀行賬戶國際編號不壹致 (IBAN) {{ iban }}。',
    'This value should be valid JSON.' => '該數值必須序列化為JSON格式。',
    'This collection should contain only unique elements.' => '該集合應僅包含唯壹元素。',
    'This value should be positive.' => '數值應為正數。',
    'This value should be either positive or zero.' => '數值應是正數，或為零。',
    'This value should be negative.' => '數值應為負數。',
    'This value should be either negative or zero.' => '數值應是負數，或為零。',
    'This value is not a valid timezone.' => '無效時區。',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => '此密碼已被泄露，切勿使用。請更換密碼。',
    'This value should be between {{ min }} and {{ max }}.' => '該數值應在 {{ min }} 和 {{ max }} 之間。',
    'This value is not a valid hostname.' => '該數值不是有效的主機名稱。',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => '該集合內的元素數量得是 {{ compared_value }} 的倍數。',
    'This value should satisfy at least one of the following constraints:' => '該數值需符合以下其中一個約束：',
    'Each element of this collection should satisfy its own set of constraints.' => '該集合內的每個元素需符合元素本身規定的約束。',
    'This value is not a valid International Securities Identification Number (ISIN).' => '該數值不是有效的國際證券識別碼 （ISIN）。',
    'This value should be a valid expression.' => '該值需為一個有效的表達式。',
    'This value is not a valid CSS color.' => '該值不是有效的CSS顏色。',
    'This value is not a valid CIDR notation.' => '該值不是一個有效的CIDR表示。',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => '網絡掩碼的值應當在 {{ min }} 和 {{ max }} 之間。',
    'This form should not contain extra fields.' => '該表單中不可有額外字段。',
    'The uploaded file was too large. Please try to upload a smaller file.' => '上傳文件太大， 請重新嘗試上傳一個較小的文件。',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF 驗證符無效， 請重新提交。',
    'This value is not a valid HTML5 color.' => '該數值不是個有效的 HTML5 顏色。',
    'Please enter a valid birthdate.' => '請輸入有效的生日日期。',
    'The selected choice is invalid.' => '所選的選項無效。',
    'The collection is invalid.' => '集合無效。',
    'Please select a valid color.' => '請選擇有效的顏色。',
    'Please select a valid country.' => '請選擇有效的國家。',
    'Please select a valid currency.' => '請選擇有效的貨幣。',
    'Please choose a valid date interval.' => '請選擇有效的日期間隔。',
    'Please enter a valid date and time.' => '請輸入有效的日期與時間。',
    'Please enter a valid date.' => '請輸入有效的日期。',
    'Please select a valid file.' => '請選擇有效的文件。',
    'The hidden field is invalid.' => '隱藏字段無效。',
    'Please enter an integer.' => '請輸入整數。',
    'Please select a valid language.' => '請選擇有效的語言。',
    'Please select a valid locale.' => '請選擇有效的語言環境。',
    'Please enter a valid money amount.' => '請輸入正確的金額。',
    'Please enter a number.' => '請輸入數字。',
    'The password is invalid.' => '密碼無效。',
    'Please enter a percentage value.' => '請輸入百分比值。',
    'The values do not match.' => '數值不匹配。',
    'Please enter a valid time.' => '請輸入有效的時間。',
    'Please select a valid timezone.' => '請選擇有效的時區。',
    'Please enter a valid URL.' => '請輸入有效的網址。',
    'Please enter a valid search term.' => '請輸入有效的搜索詞。',
    'Please provide a valid phone number.' => '請提供有效的手機號碼。',
    'The checkbox has an invalid value.' => '無效的選框值。',
    'Please enter a valid email address.' => '請輸入有效的電子郵件地址。',
    'Please select a valid option.' => '請選擇有效的選項。',
    'Please select a valid range.' => '請選擇有效的範圍。',
    'Please enter a valid week.' => '請輸入有效的星期。',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => '身份驗證發生異常。',
    'Authentication credentials could not be found.' => '沒有找到身份驗證的憑證。',
    'Authentication request could not be processed due to a system problem.' => '由於系統故障，身份驗證的請求無法被處理。',
    'Invalid credentials.' => '無效的憑證。',
    'Cookie has already been used by someone else.' => 'Cookie 已經被其他人使用。',
    'Not privileged to request the resource.' => '沒有權限請求此資源。',
    'Invalid CSRF token.' => '無效的 CSRF token 。',
    'No authentication provider found to support the authentication token.' => '沒有找到支持此 token 的身份驗證服務提供方。',
    'No session available, it either timed out or cookies are not enabled.' => 'Session 不可用。回話超時或沒有啓用 cookies 。',
    'No token could be found.' => '找不到 token 。',
    'Username could not be found.' => '找不到用戶名。',
    'Account has expired.' => '賬號已逾期。',
    'Credentials have expired.' => '憑證已逾期。',
    'Account is disabled.' => '賬號已被禁用。',
    'Account is locked.' => '賬號已被鎖定。',
    'Too many failed login attempts, please try again later.' => '登入失敗的次數過多，請稍後再試。',
    'Invalid or expired login link.' => '失效或過期的登入鏈接。',
    'Too many failed login attempts, please try again in %minutes% minute.' => '登錄失敗的次數過多，請在%minutes%分鐘後再試。',
    'Too many failed login attempts, please try again in %minutes% minutes.' => '登錄失敗的次數過多，請在%minutes%分鐘後再試。',
  ),
));

$catalogueZh = new MessageCatalogue('zh', array (
));
$catalogue->addFallbackCatalogue($catalogueZh);
$catalogueCs = new MessageCatalogue('cs', array (
  'validators' => 
  array (
    'This value should be false.' => 'Tato hodnota musí být nepravdivá (false).',
    'This value should be true.' => 'Tato hodnota musí být pravdivá (true).',
    'This value should be of type {{ type }}.' => 'Tato hodnota musí být typu {{ type }}.',
    'This value should be blank.' => 'Tato hodnota musí být prázdná.',
    'The value you selected is not a valid choice.' => 'Vybraná hodnota není platnou možností.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Musí být vybrána nejméně {{ limit }} možnost.|Musí být vybrány nejméně {{ limit }} možnosti.|Musí být vybráno nejméně {{ limit }} možností.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Musí být vybrána maximálně {{ limit }} možnost.|Musí být vybrány maximálně {{ limit }} možnosti.|Musí být vybráno maximálně {{ limit }} možností.',
    'One or more of the given values is invalid.' => 'Některé z uvedených hodnot jsou neplatné.',
    'This field was not expected.' => 'Toto pole nebylo očekáváno.',
    'This field is missing.' => 'Toto pole chybí.',
    'This value is not a valid date.' => 'Tato hodnota není platné datum.',
    'This value is not a valid datetime.' => 'Tato hodnota není platné datum s časovým údajem.',
    'This value is not a valid email address.' => 'Tato hodnota není platná e-mailová adresa.',
    'The file could not be found.' => 'Soubor nebyl nalezen.',
    'The file is not readable.' => 'Soubor je nečitelný.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Soubor je příliš velký ({{ size }} {{ suffix }}). Maximální povolená velikost souboru je {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Neplatný mime typ souboru ({{ type }}). Povolené mime typy souborů jsou {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Tato hodnota musí být {{ limit }} nebo méně.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Tato hodnota je příliš dlouhá. Musí obsahovat maximálně {{ limit }} znak.|Tato hodnota je příliš dlouhá. Musí obsahovat maximálně {{ limit }} znaky.|Tato hodnota je příliš dlouhá. Musí obsahovat maximálně {{ limit }} znaků.',
    'This value should be {{ limit }} or more.' => 'Tato hodnota musí být {{ limit }} nebo více.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Tato hodnota je příliš krátká. Musí obsahovat minimálně {{ limit }} znak.|Tato hodnota je příliš krátká. Musí obsahovat minimálně {{ limit }} znaky.|Tato hodnota je příliš krátká. Musí obsahovat minimálně {{ limit }} znaků.',
    'This value should not be blank.' => 'Tato hodnota nesmí být prázdná.',
    'This value should not be null.' => 'Tato hodnota nesmí být null.',
    'This value should be null.' => 'Tato hodnota musí být null.',
    'This value is not valid.' => 'Tato hodnota není platná.',
    'This value is not a valid time.' => 'Tato hodnota není platný časový údaj.',
    'This value is not a valid URL.' => 'Tato hodnota není platná URL adresa.',
    'The two values should be equal.' => 'Tyto dvě hodnoty musí být stejné.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Soubor je příliš velký. Maximální povolená velikost souboru je {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Soubor je příliš velký.',
    'The file could not be uploaded.' => 'Soubor se nepodařilo nahrát.',
    'This value should be a valid number.' => 'Tato hodnota musí být číslo.',
    'This file is not a valid image.' => 'Tento soubor není obrázek.',
    'This is not a valid IP address.' => 'Toto není platná IP adresa.',
    'This value is not a valid language.' => 'Tento jazyk neexistuje.',
    'This value is not a valid locale.' => 'Tato lokalizace neexistuje.',
    'This value is not a valid country.' => 'Tato země neexistuje.',
    'This value is already used.' => 'Tato hodnota je již používána.',
    'The size of the image could not be detected.' => 'Nepodařily se zjistit rozměry obrázku.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Obrázek je příliš široký ({{ width }}px). Maximální povolená šířka obrázku je {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Obrázek je příliš úzký ({{ width }}px). Minimální šířka musí být {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Obrázek je příliš vysoký ({{ height }}px). Maximální povolená výška obrázku je {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Obrázek je příliš nízký ({{ height }}px). Minimální výška obrázku musí být {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Tato hodnota musí být aktuální heslo uživatele.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Tato hodnota musí mít přesně {{ limit }} znak.|Tato hodnota musí mít přesně {{ limit }} znaky.|Tato hodnota musí mít přesně {{ limit }} znaků.',
    'The file was only partially uploaded.' => 'Byla nahrána jen část souboru.',
    'No file was uploaded.' => 'Žádný soubor nebyl nahrán.',
    'No temporary folder was configured in php.ini.' => 'V php.ini není nastavena cesta k adresáři pro dočasné soubory.',
    'Cannot write temporary file to disk.' => 'Dočasný soubor se nepodařilo zapsat na disk.',
    'A PHP extension caused the upload to fail.' => 'Rozšíření PHP zabránilo nahrání souboru.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Tato kolekce musí obsahovat minimálně {{ limit }} prvek.|Tato kolekce musí obsahovat minimálně {{ limit }} prvky.|Tato kolekce musí obsahovat minimálně {{ limit }} prvků.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Tato kolekce musí obsahovat maximálně {{ limit }} prvek.|Tato kolekce musí obsahovat maximálně {{ limit }} prvky.|Tato kolekce musí obsahovat maximálně {{ limit }} prvků.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Tato kolekce musí obsahovat přesně {{ limit }} prvek.|Tato kolekce musí obsahovat přesně {{ limit }} prvky.|Tato kolekce musí obsahovat přesně {{ limit }} prvků.',
    'Invalid card number.' => 'Neplatné číslo karty.',
    'Unsupported card type or invalid card number.' => 'Nepodporovaný typ karty nebo neplatné číslo karty.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Toto je neplatný IBAN.',
    'This value is not a valid ISBN-10.' => 'Tato hodnota není platné ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Tato hodnota není platné ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Tato hodnota není platné ISBN-10 ani ISBN-13.',
    'This value is not a valid ISSN.' => 'Tato hodnota není platné ISSN.',
    'This value is not a valid currency.' => 'Tato měna neexistuje.',
    'This value should be equal to {{ compared_value }}.' => 'Tato hodnota musí být rovna {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Tato hodnota musí být větší než {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Tato hodnota musí být větší nebo rovna {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Tato hodnota musí být typu {{ compared_value_type }} a zároveň musí být rovna {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Tato hodnota musí být menší než {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Tato hodnota musí být menší nebo rovna {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Tato hodnota nesmí být rovna {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Tato hodnota nesmí být typu {{ compared_value_type }} a zároveň nesmí být rovna {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Poměr stran obrázku je příliš velký ({{ ratio }}). Maximální povolený poměr stran obrázku je {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Poměr stran obrázku je příliš malý ({{ ratio }}). Minimální povolený poměr stran obrázku je {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Strany obrázku jsou čtvercové ({{ width }}x{{ height }}px). Čtvercové obrázky nejsou povolené.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Obrázek je orientovaný na šířku ({{ width }}x{{ height }}px). Obrázky orientované na šířku nejsou povolené.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Obrázek je orientovaný na výšku ({{ width }}x{{ height }}px). Obrázky orientované na výšku nejsou povolené.',
    'An empty file is not allowed.' => 'Soubor nesmí být prázdný.',
    'The host could not be resolved.' => 'Hostitele nebylo možné rozpoznat.',
    'This value does not match the expected {{ charset }} charset.' => 'Tato hodnota neodpovídá očekávané znakové sadě {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Tato hodnota není platný identifikační kód podniku (BIC).',
    'Error' => 'Chyba',
    'This is not a valid UUID.' => 'Tato hodnota není platné UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Tato hodnota musí být násobek hodnoty {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Bankovní identifikační kód (BIC) neodpovídá mezinárodnímu číslu účtu (IBAN) {{ iban }}.',
    'This value should be valid JSON.' => 'Tato hodnota musí být validní JSON.',
    'This collection should contain only unique elements.' => 'Tato kolekce musí obsahovat pouze unikátní prvky.',
    'This value should be positive.' => 'Tato hodnota musí být kladná.',
    'This value should be either positive or zero.' => 'Tato hodnota musí být buď kladná nebo nula.',
    'This value should be negative.' => 'Tato hodnota musí být záporná.',
    'This value should be either negative or zero.' => 'Tato hodnota musí být buď záporná nebo nula.',
    'This value is not a valid timezone.' => 'Tato časová zóna neexistuje.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Zadané heslo bylo součástí úniku dat, takže ho není možné použít. Použijte prosím jiné heslo.',
    'This value should be between {{ min }} and {{ max }}.' => 'Hodnota musí být mezi {{ min }} a {{ max }}.',
    'This value is not a valid hostname.' => 'Tato hodnota není platný hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Počet prvků v této kolekci musí být násobek {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Tato hodnota musí splňovat alespoň jedno z následujících omezení:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Každý prvek v této kolekci musí splňovat svá vlastní omezení.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Tato hodnota není platné mezinárodní identifikační číslo cenného papíru (ISIN).',
    'This value should be a valid expression.' => 'Tato hodnota musí být platný výraz.',
    'This value is not a valid CSS color.' => 'Tato hodnota není platná barva CSS.',
    'This value is not a valid CIDR notation.' => 'Tato hodnota není platná notace CIDR.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'Hodnota masky sítě musí být mezi {{ min }} a {{ max }}.',
    'This form should not contain extra fields.' => 'Tato skupina polí nesmí obsahovat další pole.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Nahraný soubor je příliš velký. Nahrajte prosím menší soubor.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF token je neplatný. Zkuste prosím znovu odeslat formulář.',
    'This value is not a valid HTML5 color.' => 'Tato hodnota není platná HTML5 barva.',
    'Please enter a valid birthdate.' => 'Prosím zadejte platný datum narození.',
    'The selected choice is invalid.' => 'Vybraná možnost není platná.',
    'The collection is invalid.' => 'Kolekce není platná.',
    'Please select a valid color.' => 'Prosím vyberte platnou barvu.',
    'Please select a valid country.' => 'Prosím vyberte platnou zemi.',
    'Please select a valid currency.' => 'Prosím vyberte platnou měnu.',
    'Please choose a valid date interval.' => 'Prosím vyberte platné rozpětí dat.',
    'Please enter a valid date and time.' => 'Prosím zadejte platný datum a čas.',
    'Please enter a valid date.' => 'Prosím zadejte platný datum.',
    'Please select a valid file.' => 'Prosím vyberte platný soubor.',
    'The hidden field is invalid.' => 'Skryté pole není platné.',
    'Please enter an integer.' => 'Prosím zadejte číslo.',
    'Please select a valid language.' => 'Prosím zadejte platný jazyk.',
    'Please select a valid locale.' => 'Prosím zadejte platný jazyk.',
    'Please enter a valid money amount.' => 'Prosím zadejte platnou částku.',
    'Please enter a number.' => 'Prosím zadejte číslo.',
    'The password is invalid.' => 'Heslo není platné.',
    'Please enter a percentage value.' => 'Prosím zadejte procentuální hodnotu.',
    'The values do not match.' => 'Hodnoty se neshodují.',
    'Please enter a valid time.' => 'Prosím zadejte platný čas.',
    'Please select a valid timezone.' => 'Prosím vyberte platné časové pásmo.',
    'Please enter a valid URL.' => 'Prosím zadejte platnou URL.',
    'Please enter a valid search term.' => 'Prosím zadejte platný výraz k vyhledání.',
    'Please provide a valid phone number.' => 'Prosím zadejte platné telefonní číslo.',
    'The checkbox has an invalid value.' => 'Zaškrtávací políčko má neplatnou hodnotu.',
    'Please enter a valid email address.' => 'Prosím zadejte platnou emailovou adresu.',
    'Please select a valid option.' => 'Prosím vyberte platnou možnost.',
    'Please select a valid range.' => 'Prosím vyberte platný rozsah.',
    'Please enter a valid week.' => 'Prosím zadejte platný týden.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Při ověřování došlo k chybě.',
    'Authentication credentials could not be found.' => 'Ověřovací údaje nebyly nalezeny.',
    'Authentication request could not be processed due to a system problem.' => 'Požadavek na ověření nemohl být zpracován kvůli systémové chybě.',
    'Invalid credentials.' => 'Neplatné přihlašovací údaje.',
    'Cookie has already been used by someone else.' => 'Cookie již bylo použité někým jiným.',
    'Not privileged to request the resource.' => 'Nemáte oprávnění přistupovat k prostředku.',
    'Invalid CSRF token.' => 'Neplatný CSRF token.',
    'No authentication provider found to support the authentication token.' => 'Poskytovatel pro ověřovací token nebyl nalezen.',
    'No session available, it either timed out or cookies are not enabled.' => 'Session není k dispozici, vypršela její platnost, nebo jsou zakázané cookies.',
    'No token could be found.' => 'Token nebyl nalezen.',
    'Username could not be found.' => 'Přihlašovací jméno nebylo nalezeno.',
    'Account has expired.' => 'Platnost účtu vypršela.',
    'Credentials have expired.' => 'Platnost přihlašovacích údajů vypršela.',
    'Account is disabled.' => 'Účet je zakázaný.',
    'Account is locked.' => 'Účet je zablokovaný.',
    'Too many failed login attempts, please try again later.' => 'Příliš mnoho nepovedených pokusů přihlášení. Zkuste to prosím později.',
    'Invalid or expired login link.' => 'Neplatný nebo expirovaný odkaz na přihlášení.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Příliš mnoho neúspěšných pokusů o přihlášení, zkuste to prosím znovu za %minutes% minutu.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Příliš mnoho neúspěšných pokusů o přihlášení, zkuste to prosím znovu za %minutes% minut.',
  ),
));
$catalogueZh->addFallbackCatalogue($catalogueCs);

return $catalogue;