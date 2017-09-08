<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_60e0e966e0140078b587b8d51af5fb64f61ad224bc8c67eee154d7af1004ad25 extends Twig_Template
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
        $__internal_7c174efe3dced9f12fc5b2d0f6d1b28dd4fa040a97a3c215f3c85d24bd5db554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c174efe3dced9f12fc5b2d0f6d1b28dd4fa040a97a3c215f3c85d24bd5db554->enter($__internal_7c174efe3dced9f12fc5b2d0f6d1b28dd4fa040a97a3c215f3c85d24bd5db554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_54b63730c2ac3ae89d59bbf663189582def486803f312c28e48f95c3a191fa7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b63730c2ac3ae89d59bbf663189582def486803f312c28e48f95c3a191fa7b->enter($__internal_54b63730c2ac3ae89d59bbf663189582def486803f312c28e48f95c3a191fa7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_7c174efe3dced9f12fc5b2d0f6d1b28dd4fa040a97a3c215f3c85d24bd5db554->leave($__internal_7c174efe3dced9f12fc5b2d0f6d1b28dd4fa040a97a3c215f3c85d24bd5db554_prof);

        
        $__internal_54b63730c2ac3ae89d59bbf663189582def486803f312c28e48f95c3a191fa7b->leave($__internal_54b63730c2ac3ae89d59bbf663189582def486803f312c28e48f95c3a191fa7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
