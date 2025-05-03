    //logotipo holografico
    
        // Aguardar o carregamento completo do DOM
        document.addEventListener('DOMContentLoaded', function() {
            // Elementos do DOM
            const progressBar = document.getElementById('progressBar');
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabContents = document.querySelectorAll('.tab-content');
            const nextButtons = document.querySelectorAll('.next-tab');
            const prevButtons = document.querySelectorAll('.prev-tab');
            const purchaseSelect = document.getElementById('purchase');
            const purchaseGroup = document.getElementById('purchaseGroup');
            const eventsSelect = document.getElementById('events');
            const eventsGroup = document.getElementById('eventsGroup');
            const connectButtons = document.querySelectorAll('.connect-social');
            const connectedAccounts = document.getElementById('connectedAccounts');
            const saveProfileBtn = document.getElementById('saveProfileBtn');
            const successModal = document.getElementById('successModal');
            const closeModalBtn = document.getElementById('closeModalBtn');
            const closeModalX = document.querySelector('.close-modal');
            
            // Progresso inicial
            updateProgress(0);
            
            // Controle de abas
            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const tabId = button.getAttribute('data-tab');
                    switchTab(tabId);
                });
            });
            
            // Botões de navegação entre abas
            nextButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const nextTabId = button.getAttribute('data-next');
                    switchTab(nextTabId);
                });
            });
            
            prevButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const prevTabId = button.getAttribute('data-prev');
                    switchTab(prevTabId);
                });
            });
            
            // Mostrar/esconder campos condicionais
            if (purchaseSelect) {
                purchaseSelect.addEventListener('change', () => {
                    if (purchaseSelect.value === 'yes') {
                        purchaseGroup.style.display = 'block';
                    } else {
                        purchaseGroup.style.display = 'none';
                    }
                });
            }
            
            if (eventsSelect) {
                eventsSelect.addEventListener('change', () => {
                    if (eventsSelect.value === 'yes') {
                        eventsGroup.style.display = 'block';
                    } else {
                        eventsGroup.style.display = 'none';
                    }
                });
            }
            
            // Conexão com redes sociais
            connectButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const socialNetwork = button.getAttribute('data-social');
                    const inputField = document.getElementById(socialNetwork);
                    
                    if (inputField.value.trim() !== '') {
                        connectSocialMedia(socialNetwork, inputField.value);
                        button.textContent = 'Conectado';
                        button.disabled = true;
                        button.style.backgroundColor = '#28a745';
                    } else {
                        alert('Por favor, insira um perfil válido.');
                    }
                });
            });
            
            // Upload e análise de documentos
            const documentInputs = document.querySelectorAll('input[type="file"]');
            documentInputs.forEach(input => {
                input.addEventListener('change', () => {
                    if (input.files.length > 0) {
                        const fileName = input.files[0].name;
                        console.log(`Arquivo selecionado: ${fileName}`);
                        
                        // Simulação de análise de documento
                        if (input.id === 'idDocument' || input.id === 'selfie') {
                            simulateDocumentAnalysis();
                        }
                    }
                });
            });
            
            // Upload de links de perfis de eSports
            const gameProfileInputs = document.querySelectorAll('#esportsLinksForm input[type="url"], #esportsLinksForm input[type="text"]');
            gameProfileInputs.forEach(input => {
                input.addEventListener('change', () => {
                    if (input.value.trim() !== '') {
                        validateGameProfile(input.id, input.value);
                    }
                });
            });
            
            // Botão de salvar perfil
            if (saveProfileBtn) {
                saveProfileBtn.addEventListener('click', () => {
                    // Simulação de salvamento do perfil
                    saveProfileBtn.innerHTML = '<span class="spinner"></span> Salvando...';
                    saveProfileBtn.disabled = true;
                    
                    setTimeout(() => {
                        // Exibir modal de sucesso
                        successModal.style.display = 'flex';
                        saveProfileBtn.innerHTML = 'Perfil Salvo';
                    }, 2000);
                });
            }
            
            // Fechar modal
            if (closeModalBtn) {
                closeModalBtn.addEventListener('click', () => {
                    successModal.style.display = 'none';
                });
            }
            
            if (closeModalX) {
                closeModalX.addEventListener('click', () => {
                    successModal.style.display = 'none';
                });
            }
            
            // Inicializar análise de IA para a última aba
            document.querySelector('[data-next="ai-profile"]').addEventListener('click', () => {
                generateAIProfile();
            });
            
            // Funções auxiliares
            
            // Trocar de aba
            function switchTab(tabId) {
                // Atualizar botões de aba
                tabButtons.forEach(btn => {
                    if (btn.getAttribute('data-tab') === tabId) {
                        btn.classList.add('active');
                    } else {
                        btn.classList.remove('active');
                    }
                });
                
                // Atualizar conteúdo de aba
                tabContents.forEach(content => {
                    if (content.id === tabId) {
                        content.classList.add('active');
                        content.classList.add('fade-in');
                    } else {
                        content.classList.remove('active');
                        content.classList.remove('fade-in');
                    }
                });
                
                // Atualizar barra de progresso
                updateProgressByTab(tabId);
            }
            
            // Atualizar barra de progresso
            function updateProgressByTab(tabId) {
                const tabIndex = Array.from(tabButtons).findIndex(btn => btn.getAttribute('data-tab') === tabId);
                const progress = (tabIndex / (tabButtons.length - 1)) * 100;
                updateProgress(progress);
            }
            
            function updateProgress(percentage) {
                progressBar.style.width = `${percentage}%`;
            }
            
            // Conectar rede social (simulação)
            function connectSocialMedia(network, profile) {
                console.log(`Conectando ${network}: ${profile}`);
                
                // Atualizar lista de contas conectadas
                const accountsDiv = document.getElementById('connectedAccounts');
                if (accountsDiv.querySelector('p')) {
                    accountsDiv.innerHTML = '';
                }
                
                const accountBadge = document.createElement('div');
                accountBadge.className = 'badge';
                accountBadge.textContent = capitalizeFirstLetter(network);
                accountsDiv.appendChild(accountBadge);
                
                // Atualizar análise social
                updateSocialAnalysis();
            }
            
            // Validar perfil de jogo (simulação)
            function validateGameProfile(platform, profile) {
                console.log(`Validando perfil ${platform}: ${profile}`);
                
                // Simulação de validação
                const validationDiv = document.getElementById('profileValidation');
                validationDiv.innerHTML = '<p><span class="spinner"></span> Validando seu perfil...</p>';
                
                setTimeout(() => {
                    validationDiv.innerHTML = '<p>✅ Perfil validado com sucesso!</p>';
                    
                    // Adicionar badge
                    const badgesContainer = document.getElementById('profileBadges');
                    const badgeDiv = document.createElement('div');
                    badgeDiv.className = 'badge';
                    badgeDiv.textContent = platform.toUpperCase();
                    badgesContainer.appendChild(badgeDiv);
                    
                    // Mostrar container de badges
                    document.getElementById('validatedProfiles').style.display = 'block';
                }, 1500);
            }
            
            // Simular análise de documento
            function simulateDocumentAnalysis() {
                const analysisDiv = document.getElementById('documentAnalysis');
                analysisDiv.innerHTML = '<p><span class="spinner"></span> Analisando documentos...</p>';
                
                setTimeout(() => {
                    analysisDiv.innerHTML = `
                        <p>✅ Documentos verificados com sucesso!</p>
                        <div style="margin-top: 10px;">
                            <div class="badge">Identidade Verificada</div>
                            <div class="badge">Foto Autêntica</div>
                        </div>
                    `;
                }, 2000);
            }
            
            // Atualizar análise social
            function updateSocialAnalysis() {
                const analysisDiv = document.getElementById('socialAnalysis');
                analysisDiv.innerHTML = '<p><span class="spinner"></span> Analisando perfis sociais...</p>';
                
                setTimeout(() => {
                    analysisDiv.innerHTML = `
                        <p>✅ Análise completada! Nossa IA detectou que você é um fã ativo de eSports nas redes sociais.</p>
                        <div style="margin-top: 10px;">
                            <div class="badge">eSports Enthusiast</div>
                            <div class="badge">FURIA Follower</div>
                        </div>
                    `;
                }, 2000);
            }
            
            // Gerar perfil de IA
            function generateAIProfile() {
                // Simulando análise de IA
                setTimeout(() => {
                    document.getElementById('profileSummary').innerHTML = `
                        <div class="user-profile-summary">
                            <p><strong>Nome:</strong> <span id="profileName">Nome do Usuário</span></p>
                            <p><strong>Jogos Favoritos:</strong> Counter-Strike 2, VALORANT</p>
                            <p><strong>Frequência:</strong> Acompanha campeonatos semanalmente</p>
                            <p><strong>Perfis Conectados:</strong> 3 plataformas</p>
                            <p><strong>Nível de Engajamento:</strong> Alto</p>
                        </div>
                    `;
                    
                    document.getElementById('aiAnalysis').innerHTML = `
                        <p>Com base nas informações fornecidas, nossa IA determinou que você é um <strong>Fã Hardcore</strong> com forte conexão com a comunidade FURIA.</p>
                        <p>Você demonstra interesse principalmente em FPS táticos e acompanha regularmente campeonatos e eventos. Sua atividade nas redes sociais mostra engajamento com conteúdo de eSports, especialmente relacionado aos jogadores da FURIA.</p>
                    `;
                    
                    document.getElementById('recommendations').innerHTML = `
                        <div class="recommendation-item">
                            <h4>Eventos Recomendados</h4>
                            <ul>
                                <li>FURIA Fan Day - São Paulo (Junho 2025)</li>
                                <li>ESL Pro League Season 22 - Viewing Party</li>
                                <li>Workshop CS2 com jogadores FURIA</li>
                            </ul>
                        </div>
                        
                        <div class="recommendation-item">
                            <h4>Produtos FURIA</h4>
                            <ul>
                                <li>Jersey Oficial Pro Player 2025</li>
                                <li>Mousepad XL Edição Especial</li>
                                <li>Headset FURIA x HyperX</li>
                            </ul>
                        </div>
                        
                        <div class="recommendation-item">
                            <h4>Conteúdo Exclusivo</h4>
                            <ul>
                                <li>Acesso ao Discord exclusivo da comunidade FURIA</li>
                                <li>Treinos táticos exclusivos com analistas</li>
                                <li>Conteúdo behind-the-scenes dos bootcamps</li>
                            </ul>
                        </div>
                    `;
                    
                    document.getElementById('fanType').innerHTML = `
                        <div class="fan-type-result">
                            <h3 style="color: var(--furia-blue); margin-bottom: 15px;">Tactical Supporter</h3>
                            <p>Você é um <strong>Tactical Supporter</strong> - um fã que valoriza a estratégia e a habilidade técnica. Você não apenas torce, mas entende as nuances do jogo e aprecia jogadas bem executadas.</p>
                            <p>Fãs como você são essenciais para a comunidade FURIA, pois ajudam a elevar o nível das discussões e análises sobre o desempenho da equipe.</p>
                            <div style="margin-top: 15px;">
                                <div class="badge">Estrategista</div>
                                <div class="badge">Analítico</div>
                                <div class="badge">Leal</div>
                            </div>
                        </div>
                    `;
                }, 3000);
                
                // Preencher o nome do perfil com o valor do campo de nome, se preenchido
                const nameField = document.getElementById('name');
                if (nameField && nameField.value.trim() !== '') {
                    setTimeout(() => {
                        const profileNameElement = document.getElementById('profileName');
                        if (profileNameElement) {
                            profileNameElement.textContent = nameField.value;
                        }
                    }, 3100);
                }
            }
            
            // Capitalizar primeira letra
            function capitalizeFirstLetter(string) {
                return string.charAt(0).toUpperCase() + string.slice(1);
            }
        });

        //----------------------------------------------------------------
        //logotipo
        //----------------------------------------------------------------

    
        