<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>  <!-- Incluindo o arquivo JavaScript -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FURIA - Know Your Fan</title>
    
</head>
<body>
    <!-- Header com logo e título principal -->
    <header>
             <div class="container">
                <div class="logo-container" id="logoArea">
                    <img src="IMG/furia-logo.png" alt="Logo FURIA" class="logo" />
                    <div class="holo-overlay" id="holo"></div>
             </div>

            <h1>KNOW YOUR FAN</h1>
            <p style="text-align: center; margin-bottom: 20px;">Junte-se à família FURIA e tenha experiências exclusivas</p>
        </div>
    </header>
    
    <div class="container furia-bg">
        <!-- Barra de progresso para indicar o avanço do usuário no formulário -->
        <div class="progress-bar">
            <div class="progress" id="progressBar"></div>
        </div>
        
        <!-- Abas de navegação para cada seção -->
        <div class="tabs">
            <button class="tab-button active" data-tab="personal-info">Dados Pessoais</button>
            <button class="tab-button" data-tab="esports-interests">Interesses</button>
            <button class="tab-button" data-tab="document-upload">Documentos</button>
            <button class="tab-button" data-tab="social-media">Redes Sociais</button>
            <button class="tab-button" data-tab="esports-links">Links de eSports</button>
            <button class="tab-button" data-tab="ai-profile">Seu Perfil FURIA</button>
        </div>
        
        <!-- Seção 1: Dados Pessoais -->
        <div id="personal-info" class="tab-content active fade-in">
            <h2>Dados Pessoais</h2>
            <p>Compartilhe suas informações para personalizar sua experiência como fã da FURIA.</p>
            
            <form id="personalInfoForm">
                <div class="form-group">
                    <label for="name">Nome Completo <span class="tooltip">?<span class="tooltip-text">Seu nome completo como consta em seus documentos.</span></span></label>
                    <input type="text" id="name" name="name" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email <span class="tooltip">?<span class="tooltip-text">Usaremos este email para comunicação sobre eventos e promoções.</span></span></label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="phone">Telefone <span class="tooltip">?<span class="tooltip-text">Para comunicações importantes e verificação.</span></span></label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                
                <div class="form-group">
                    <label for="cpf">CPF <span class="tooltip">?<span class="tooltip-text">Necessário para validação de identidade.</span></span></label>
                    <input type="text" id="cpf" name="cpf" required>
                </div>
                
                <div class="form-group">
                    <label for="birth">Data de Nascimento</label>
                    <input type="date" id="birth" name="birth" required>
                </div>
                
                <div class="form-group">
                    <label for="address">Endereço Completo</label>
                    <textarea id="address" name="address" rows="3" required></textarea>
                </div>
                
                <div class="form-group">
                    <label for="city">Cidade</label>
                    <input type="text" id="city" name="city" required>
                </div>
                
                <div class="form-group">
                    <label for="state">Estado</label>
                    <input type="text" id="state" name="state" required>
                </div>
                
                <div class="form-group">
                    <label for="cep">CEP</label>
                    <input type="text" id="cep" name="cep" required>
                </div>
                
                <button type="button" class="next-tab" data-next="esports-interests">Continuar</button>
            </form>
        </div><!-- FIM Seção 1: Dados Pessoais -->
        
        <!-- Seção 2: Interesses em eSports -->
        <div id="esports-interests" class="tab-content fade-in">
            <h2>Seus Interesses em eSports</h2>
            <p>Conte-nos mais sobre suas preferências para oferecermos conteúdo personalizado.</p>
            
            <form id="interestsForm">
                <div class="form-group">
                    <label>Quais jogos de eSports você acompanha?</label>
                    <div class="checkbox-group">
                        <label class="checkbox-item">
                            <input type="checkbox" name="games[]" value="CS2"> Counter-Strike 2
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="games[]" value="valorant"> VALORANT
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="games[]" value="lol"> League of Legends
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="games[]" value="dota2"> Dota 2
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="games[]" value="rainbow6"> Rainbow Six Siege
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="games[]" value="kingsleague"> Kings League
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="games[]" value="fortnite"> Fortnite
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="games[]" value="rocket"> Rocket League
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="games[]" value="other"> Outros
                        </label>
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Com que frequência você acompanha campeonatos de eSports?</label>
                    <select name="frequency" id="frequency" required>
                        <option value="">Selecione uma opção</option>
                        <option value="daily">Diariamente</option>
                        <option value="weekly">Semanalmente</option>
                        <option value="monthly">Mensalmente</option>
                        <option value="occasionally">Ocasionalmente</option>
                        <option value="rarely">Raramente</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Você já comprou produtos oficiais da FURIA?</label>
                    <select name="purchase" id="purchase" required>
                        <option value="">Selecione uma opção</option>
                        <option value="yes">Sim</option>
                        <option value="no">Não</option>
                    </select>
                </div>
                
                <div class="form-group" id="purchaseGroup" style="display: none;">
                    <label>Quais produtos você já comprou?</label>
                    <div class="checkbox-group">
                        <label class="checkbox-item">
                            <input type="checkbox" name="products[]" value="jersey"> Camiseta/Jersey
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="products[]" value="hoodie"> Moletom
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="products[]" value="cap"> Boné/Gorro
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="products[]" value="accessories"> Acessórios
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="products[]" value="peripherals"> Periféricos
                        </label>
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Você já esteve em algum evento de eSports no último ano?</label>
                    <select name="events" id="events" required>
                        <option value="">Selecione uma opção</option>
                        <option value="yes">Sim</option>
                        <option value="no">Não</option>
                    </select>
                </div>
                
                <div class="form-group" id="eventsGroup" style="display: none;">
                    <label>Quais eventos você participou?</label>
                    <textarea name="eventsDetails" id="eventsDetails" rows="3"></textarea>
                </div>
                
                <div class="form-group">
                    <label>O que você gostaria de ver mais da FURIA?</label>
                    <div class="checkbox-group">
                        <label class="checkbox-item">
                            <input type="checkbox" name="content[]" value="interviews"> Entrevistas com jogadores
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="content[]" value="behindscenes"> Bastidores
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="content[]" value="tutorials"> Tutoriais/Dicas
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="content[]" value="meetups"> Encontros com fãs
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="content[]" value="promotions"> Promoções exclusivas
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="content[]" value="merch"> Novas mercadorias
                        </label>
                    </div>
                </div>
                
                <button type="button" class="prev-tab" data-prev="personal-info">Voltar</button>
                <button type="button" class="next-tab" data-next="document-upload">Continuar</button>
            </form>
        </div><!-- FIM Seção 2: Interesses em eSports -->
        
        <!-- Seção 3: Upload de Documentos -->
        <div id="document-upload" class="tab-content fade-in">
            <h2>Verificação de Identidade</h2>
            <p>Para garantir a segurança da sua conta e acesso a benefícios exclusivos, precisamos verificar sua identidade.</p>
            
            <form id="documentsForm">
                <div class="form-group">
                    <label for="idDocument">Documento de Identidade (RG ou CNH) <span class="tooltip">?<span class="tooltip-text">Anexe uma foto clara do seu documento oficial com foto.</span></span></label>
                    <input type="file" id="idDocument" name="idDocument" accept="image/*,.pdf" required>
                </div>
                
                <div class="form-group">
                    <label for="selfie">Selfie com o Documento <span class="tooltip">?<span class="tooltip-text">Tire uma foto segurando seu documento para verificação.</span></span></label>
                    <input type="file" id="selfie" name="selfie" accept="image/*" required>
                </div>
                
                <div class="form-group">
                    <label for="proofOfAddress">Comprovante de Residência (opcional)</label>
                    <input type="file" id="proofOfAddress" name="proofOfAddress" accept="image/*,.pdf">
                </div>
                
                <div class="card ai-analysis">
                    <h3><span class="ai-icon">🤖</span> Análise de Documentos com IA</h3>
                    <p>Nosso sistema de inteligência artificial verifica automaticamente seus documentos para garantir segurança e autenticidade.</p>
                    <div id="documentAnalysis">
                        <p>Faça o upload dos documentos para iniciar a análise.</p>
                    </div>
                </div>
                
                <button type="button" class="prev-tab" data-prev="esports-interests">Voltar</button>
                <button type="button" class="next-tab" data-next="social-media">Continuar</button>
            </form>
        </div><!-- FIM Seção 3: Upload de Documentos -->
        
        <!-- Seção 4: Redes Sociais -->
        <div id="social-media" class="tab-content fade-in">
            <h2>Conecte Suas Redes Sociais</h2>
            <p>Vincule suas redes sociais para compartilhar seu amor pela FURIA e receber conteúdo personalizado.</p>
            
            <form id="socialMediaForm">
                <div class="form-group">
                    <label for="twitter">Twitter/X <span class="tooltip">?<span class="tooltip-text">Conecte para seguir as últimas notícias e interagir com a comunidade FURIA.</span></span></label>
                    <div style="display: flex; gap: 10px;">
                        <input type="url" id="twitter" name="twitter" placeholder="https://twitter.com/seu_usuario">
                        <button type="button" class="connect-social" data-social="twitter">Conectar</button>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="instagram">Instagram</label>
                    <div style="display: flex; gap: 10px;">
                        <input type="url" id="instagram" name="instagram" placeholder="https://instagram.com/seu_usuario">
                        <button type="button" class="connect-social" data-social="instagram">Conectar</button>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <div style="display: flex; gap: 10px;">
                        <input type="url" id="facebook" name="facebook" placeholder="https://facebook.com/seu_usuario">
                        <button type="button" class="connect-social" data-social="facebook">Conectar</button>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="twitch">Twitch</label>
                    <div style="display: flex; gap: 10px;">
                        <input type="url" id="twitch" name="twitch" placeholder="https://twitch.tv/seu_usuario">
                        <button type="button" class="connect-social" data-social="twitch">Conectar</button>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="discord">Discord (ID de usuário)</label>
                    <div style="display: flex; gap: 10px;">
                        <input type="text" id="discord" name="discord" placeholder="Seu ID no Discord">
                        <button type="button" class="connect-social" data-social="discord">Conectar</button>
                    </div>
                </div>
                
                <div class="card ai-analysis">
                    <h3><span class="ai-icon">🤖</span> Análise de Perfil Social</h3>
                    <p>Nossa IA analisará suas interações sociais relacionadas a eSports para personalizar sua experiência.</p>
                    <div id="socialAnalysis">
                        <p>Conecte pelo menos uma rede social para iniciar a análise.</p>
                    </div>
                    
                    <div class="connected-accounts" style="margin-top: 20px;">
                        <h4>Contas Conectadas:</h4>
                        <div id="connectedAccounts">
                            <p>Nenhuma conta conectada ainda.</p>
                        </div>
                    </div>
                </div>
                
                <button type="button" class="prev-tab" data-prev="document-upload">Voltar</button>
                <button type="button" class="next-tab" data-next="esports-links">Continuar</button>
            </form>
        </div> <!-- FIM Seção 4: Redes Sociais -->
        
        <!-- Seção 5: Links de perfis de eSports -->
        <div id="esports-links" class="tab-content fade-in">
            <h2>Seus Perfis de eSports</h2>
            <p>Compartilhe seus perfis em plataformas de jogos e sites de eSports para uma análise personalizada.</p>
            
            <form id="esportsLinksForm">
                <div class="form-group">
                    <label for="steam">Perfil Steam <span class="tooltip">?<span class="tooltip-text">Sua URL de perfil da Steam para analisarmos seu histórico de jogos.</span></span></label>
                    <input type="url" id="steam" name="steam" placeholder="https://steamcommunity.com/id/seu_perfil">
                </div>
                
                <div class="form-group">
                    <label for="faceit">Perfil FACEIT</label>
                    <input type="url" id="faceit" name="faceit" placeholder="https://www.faceit.com/en/players/seu_usuario">
                </div>
                
                <div class="form-group">
                    <label for="battlenet">Battle.net (Usuário)</label>
                    <input type="text" id="battlenet" name="battlenet" placeholder="Seu ID na Battle.net">
                </div>
                
                <div class="form-group">
                    <label for="riotgames">Riot Games (Usuário e Tag)</label>
                    <input type="text" id="riotgames" name="riotgames" placeholder="Usuário#TAG">
                </div>
                
                <div class="form-group">
                    <label for="gamersclub">GamersClub</label>
                    <input type="url" id="gamersclub" name="gamersclub" placeholder="https://gamersclub.com.br/player/id">
                </div>
                
                <div class="form-group">
                    <label for="otherProfiles">Outros perfis relevantes</label>
                    <textarea id="otherProfiles" name="otherProfiles" rows="3" placeholder="Adicione outros perfis relevantes, um por linha"></textarea>
                </div>
                
                <div class="card ai-analysis">
                    <h3><span class="ai-icon">🤖</span> Validação de Perfis com IA</h3>
                    <p>Nossa IA analisará seus perfis para confirmar sua relação com eSports e personalizar sua experiência FURIA.</p>
                    <div id="profileValidation">
                        <p>Adicione pelo menos um perfil para iniciar a validação.</p>
                    </div>
                    
                    <div id="validatedProfiles" style="margin-top: 15px; display: none;">
                        <h4>Perfis Validados:</h4>
                        <div class="badge-container" id="profileBadges">
                            <!-- Badges serão adicionados via JavaScript -->
                        </div>
                    </div>
                </div>
                
                <button type="button" class="prev-tab" data-prev="social-media">Voltar</button>
                <button type="button" class="next-tab" data-next="ai-profile">Finalizar e Ver Meu Perfil</button>
            </form>
        </div><!-- FIM Seção 5: Links de perfis de eSports -->
        
        <!-- Seção 6: Análise de Perfil com IA -->
        <div id="ai-profile" class="tab-content fade-in">
            <h2>Seu Perfil FURIA</h2>
            <p>Com base nas informações que você compartilhou, nossa IA criou um perfil personalizado para você.</p>
            
            <div class="card">
                <h3>Resumo do Seu Perfil</h3>
                <div id="profileSummary">
                    <p><span class="spinner"></span> Gerando seu perfil personalizado...</p>
                </div>
            </div>
            
            <div class="card ai-analysis">
                <h3><span class="ai-icon">🤖</span> Análise de IA</h3>
                <div id="aiAnalysis">
                    <p><span class="spinner"></span> Analisando suas preferências...</p>
                </div>
            </div>
            
            <div class="card">
                <h3>Recomendações Personalizadas</h3>
                <div id="recommendations">
                    <div class="recommendation-item">
                        <h4>Eventos Recomendados</h4>
                        <p>Carregando recomendações...</p>
                    </div>
                    
                    <div class="recommendation-item">
                        <h4>Produtos FURIA</h4>
                        <p>Carregando recomendações...</p>
                    </div>
                    
                    <div class="recommendation-item">
                        <h4>Conteúdo Exclusivo</h4>
                        <p>Carregando recomendações...</p>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <h3>Seu Tipo de Fã</h3>
                <div id="fanType">
                    <p>Carregando resultado...</p>
                </div>
            </div>
            
            <button type="button" class="prev-tab" data-prev="esports-links">Voltar</button>
            <button type="button" id="saveProfileBtn">Salvar Meu Perfil</button>
        </div>
    </div><!-- FIM Seção 6: Análise de Perfil com IA -->
    
    <!-- Modal de sucesso -->
    <div class="modal" id="successModal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2 style="color: var(--furia-blue);">Perfil Salvo com Sucesso!</h2>
            <p>Seu perfil de fã FURIA foi criado e salvo com sucesso. Agora você faz parte oficialmente da família FURIA!</p>
            <p>Em breve, você receberá um email com informações exclusivas e seu código de fã para acessar benefícios especiais.</p>
            <div style="text-align: center; margin-top: 30px;">
                <button type="button" id="closeModalBtn">Entendido</button>
            </div>
        </div>
    </div> <!-- FIM Modal de sucesso -->
    
    <!-- Código PHP para backend (processamento dos dados) -->
    <?php
    /**
     * Know Your Fan - FURIA eSports
     * 
     * Arquivo principal para processamento de dados e integração com APIs de IA
     * Desenvolvido para coleta de informações de fãs de eSports
     */

    // Verificar se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Processar dados pessoais
        if (isset($_POST['form_type']) && $_POST['form_type'] === 'personal_info') {
            processPersonalInfo($_POST);
        }
        
        // Processar interesses
        if (isset($_POST['form_type']) && $_POST['form_type'] === 'interests') {
            processInterestsData($_POST);
        }
        
        // Processar documentos
        if (isset($_POST['form_type']) && $_POST['form_type'] === 'documents') {
            processDocuments($_FILES);
        }
        
        // Processar redes sociais
        if (isset($_POST['form_type']) && $_POST['form_type'] === 'social_media') {
            processSocialMedia($_POST);
        }
        
        // Processar links de eSports
        if (isset($_POST['form_type']) && $_POST['form_type'] === 'esports_links') {
            processEsportsLinks($_POST);
        }
        
        // Salvar perfil completo
        if (isset($_POST['form_type']) && $_POST['form_type'] === 'complete_profile') {
            saveCompleteProfile($_POST);
        }
    }

    /**
     * Processa e valida dados pessoais do usuário
     * 
     * @param array $data Dados do formulário
     * @return bool Resultado do processamento
     */
    function processPersonalInfo($data) {
        // Validar campos obrigatórios
        if (empty($data['name']) || empty($data['email']) || empty($data['cpf'])) {
            return false;
        }
        
        // Validar formato de email
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        
        // Validar CPF (implementação simplificada)
        $cpf = preg_replace('/[^0-9]/', '', $data['cpf']);
        if (strlen($cpf) !== 11) {
            return false;
        }
        
        // Simular salvamento no banco de dados
        // Em um ambiente real, você usaria PDO ou mysql para inserir no banco
        
        return true;
    }

    /**
     * Processa dados sobre interesses em eSports
     * 
     * @param array $data Dados do formulário
     * @return bool Resultado do processamento
     */
    function processInterestsData($data) {
        // Verificar se há jogos selecionados
        if (!isset($data['games']) || empty($data['games'])) {
            return false;
        }
        
        // Processar demais dados de interesse
        // Em um ambiente real, você salvaria esses dados em uma tabela relacionada
        
        return true;
    }

    /**
     * Processa upload e validação de documentos
     * 
     * @param array $files Arquivos enviados
     * @return bool Resultado do processamento
     */
    function processDocuments($files) {
        // Verificar se arquivos obrigatórios foram enviados
        if (!isset($files['idDocument']) || $files['idDocument']['error'] !== 0) {
            return false;
        }
        
        if (!isset($files['selfie']) || $files['selfie']['error'] !== 0) {
            return false;
        }
        
        // Verificar tipos de arquivo permitidos
        $allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'application/pdf'];
        
        if (!in_array($files['idDocument']['type'], $allowedTypes)) {
            return false;
        }
        
        if (!in_array($files['selfie']['type'], $allowedTypes)) {
            return false;
        }
        
        // Em um ambiente real, você faria upload para um local seguro
        // e chamaria APIs de IA para validação de documentos
        
        // Simular chamada para API de IA para verificação de documentos
        $verificationResult = simulateAIDocumentVerification($files);
        
        return $verificationResult;
    }

    /**
     * Simula uma verificação de documento usando IA
     * Em um ambiente real, isso seria uma chamada para uma API externa
     * 
     * @param array $files Arquivos para verificação
     * @return bool Resultado da verificação
     */
    function simulateAIDocumentVerification($files) {
        // Em um ambiente real, você enviaria os arquivos para um serviço como:
        // - Google Cloud Vision API
       
        // Simulação do resultado
        return true;
    }

    /**
     * Processa e conecta redes sociais
     * 
     * @param array $data Dados das redes sociais
     * @return bool Resultado do processamento
     */
    function processSocialMedia($data) {
        // Verificar se pelo menos uma rede social foi informada
        $hasSocialMedia = false;
        $socialNetworks = ['twitter', 'instagram', 'facebook', 'twitch', 'discord'];
        
        foreach ($socialNetworks as $network) {
            if (!empty($data[$network])) {
                $hasSocialMedia = true;
                break;
            }
        }
        
        if (!$hasSocialMedia) {
            return false;
        }
        
        // Em um ambiente real, você usaria OAuth2.0 para autenticar o usuário
        // e obter permissão para acessar dados das redes sociais
        
        // Simular análise de perfil social com IA
        $socialAnalysis = simulateSocialMediaAnalysis($data);
        
        return true;
    }

    /**
     * Simula análise de perfil de redes sociais com IA
     * Em um ambiente real, você usaria APIs de IA como OpenAI
     * 
     * @param array $data Dados das redes sociais
     * @return array Resultados da análise
     */
    function simulateSocialMediaAnalysis($data) {
        // Em um ambiente real, você faria chamadas para APIs como:
        // - OpenAI API
        // - Google Cloud Natural Language API
        
        // Simulação do resultado
        return [
            'enthusiast_level' => 'high',
            'engagement' => 'active',
            'interests' => ['fps', 'competitive', 'tactical'],
            'sentiment' => 'positive'
        ];
    }

    /**
     * Processa links de perfis de eSports
     * 
     * @param array $data Dados dos perfis
     * @return bool Resultado do processamento
     */
    function processEsportsLinks($data) {
        // Verificar se pelo menos um perfil foi informado
        $hasProfile = false;
        $platforms = ['steam', 'faceit', 'battlenet', 'riotgames', 'gamersclub'];
        
        foreach ($platforms as $platform) {
            if (!empty($data[$platform])) {
                $hasProfile = true;
                break;
            }
        }
        
        if (!$hasProfile) {
            return false;
        }
        
        // Simular validação de perfis com IA
        $profileAnalysis = simulateProfileValidation($data);
        
        return true;
    }

    /**
     * Simula validação de perfis de eSports com IA
     * 
     * @param array $data Dados dos perfis
     * @return array Resultados da validação
     */
    function simulateProfileValidation($data) {
        // Em um ambiente real, você usaria APIs específicas de cada plataforma
        // ou serviços como APIs de IA para análise de conteúdo relevante
        
        // Simulação do resultado
        return [
            'valid_profiles' => ['steam', 'faceit'],
            'game_preferences' => ['cs2', 'valorant'],
            'skill_level' => 'intermediate',
            'authenticity' => 'verified'
        ];
    }

    /**
     * Salva o perfil completo do usuário e gera análise final
     * 
     * @param array $data Todos os dados do usuário
     * @return bool Resultado do salvamento
     */
    function saveCompleteProfile($data) {
        // Em um ambiente real, você consolidaria todos os dados
        // e geraria um perfil completo do fã
        
        // Chamar API de IA para análise final do perfil
        $aiAnalysis = generateAIFanProfile($data);
        
        // Enviar email de confirmação
        sendConfirmationEmail($data['email'], $aiAnalysis);
        
        return true;
    }

    /**
     * Gera análise final do perfil do fã usando IA
     * 
     * @param array $data Todos os dados do usuário
     * @return array Análise completa do perfil
     */
    function generateAIFanProfile($data) {
        // Em um ambiente real, você faria uma chamada para uma API como OpenAI
        // para gerar uma análise detalhada do perfil do fã
        
        // Exemplo de chamada para OpenAI API (pseudocódigo)
        /*
        $openai = new OpenAI($apiKey);
        $response = $openai->completions->create([
            'model' => 'gpt-4',
            'prompt' => "Analyze this esports fan profile: " . json_encode($data),
            'max_tokens' => 500
        ]);
        
        return $response->choices[0]->text;
        */
        
        // Simulação do resultado
        return [
            'fan_type' => 'Tactical Supporter',
            'engagement_level' => 'High',
            'preferences' => ['tactical fps', 'competitive play', 'team strategy'],
            'recommendations' => [
                'events' => ['FURIA Fan Day', 'ESL Pro League Viewing Party'],
                'products' => ['Jersey Pro Player', 'Limited Edition Mousepad'],
                'content' => ['Strategy Workshops', 'Behind-the-scenes Content']
            ]
        ];
    }

    /**
     * Envia email de confirmação para o usuário
     * 
     * @param string $email Email do usuário
     * @param array $profile Dados do perfil gerado
     * @return bool Resultado do envio
     */
    function sendConfirmationEmail($email, $profile) {
        // Em um ambiente real, você usaria PHPMailer
        // para enviar um email de confirmação
        
        // Pseudocódigo para envio de email
        /*
        $mail = new PHPMailer(true);
        $mail->setFrom('noreply@furia.gg', 'FURIA eSports');
        $mail->addAddress($email);
        $mail->Subject = 'Bem-vindo à família FURIA!';
        $mail->Body = 'Seu perfil foi criado com sucesso...';
        $mail->send();
        */
        
        return true;
    }
    ?>

<script src="holo.js"></script>  <!-- Incluindo o arquivo da animacao holografica -->

</body>
</html>