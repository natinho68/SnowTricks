<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_1900a42fa54ad6cec7daa2eb9f78a5d6116f190f93cc3b764ea3f6566c3bc42b extends Twig_Template
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
        $__internal_42ba9043efb9d2d0f971e908909c171bb5fed4c3578d31fec0ac36ca51139307 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42ba9043efb9d2d0f971e908909c171bb5fed4c3578d31fec0ac36ca51139307->enter($__internal_42ba9043efb9d2d0f971e908909c171bb5fed4c3578d31fec0ac36ca51139307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_7f8109e9be3e11cb4d150071055139dad3978dd0ce856fe1f45d950b7bac1eba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f8109e9be3e11cb4d150071055139dad3978dd0ce856fe1f45d950b7bac1eba->enter($__internal_7f8109e9be3e11cb4d150071055139dad3978dd0ce856fe1f45d950b7bac1eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_42ba9043efb9d2d0f971e908909c171bb5fed4c3578d31fec0ac36ca51139307->leave($__internal_42ba9043efb9d2d0f971e908909c171bb5fed4c3578d31fec0ac36ca51139307_prof);

        
        $__internal_7f8109e9be3e11cb4d150071055139dad3978dd0ce856fe1f45d950b7bac1eba->leave($__internal_7f8109e9be3e11cb4d150071055139dad3978dd0ce856fe1f45d950b7bac1eba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
