<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_68c38a23be265dd6e22e9bb59bc6674cc67df65ac784156f4290ba4aafcd8f5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_215347fbaeca82aba6384e97ea1bccc0ee00eb8b21c4733444875c5bd07c5bf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_215347fbaeca82aba6384e97ea1bccc0ee00eb8b21c4733444875c5bd07c5bf8->enter($__internal_215347fbaeca82aba6384e97ea1bccc0ee00eb8b21c4733444875c5bd07c5bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_b20033b64810c7185074e8b9eb475f6b2b4d0a3095183a0751f5f7971a24f12d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20033b64810c7185074e8b9eb475f6b2b4d0a3095183a0751f5f7971a24f12d->enter($__internal_b20033b64810c7185074e8b9eb475f6b2b4d0a3095183a0751f5f7971a24f12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_215347fbaeca82aba6384e97ea1bccc0ee00eb8b21c4733444875c5bd07c5bf8->leave($__internal_215347fbaeca82aba6384e97ea1bccc0ee00eb8b21c4733444875c5bd07c5bf8_prof);

        
        $__internal_b20033b64810c7185074e8b9eb475f6b2b4d0a3095183a0751f5f7971a24f12d->leave($__internal_b20033b64810c7185074e8b9eb475f6b2b4d0a3095183a0751f5f7971a24f12d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
